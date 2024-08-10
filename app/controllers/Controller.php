<?php

namespace App\Controllers;

use PDO;

abstract class Controller
{
    protected function DataTable($query, $searchColumns, $recordFormatter)
    {
        $draw = request()->query('draw') ?? 1;
        $start = request()->query('start') ?? 0;
        $rowperpage = request()->query('length') ?? 10;

        $order = request()->query('order');
        $columns = request()->query('columns');
        $search = request()->query('search');

        $columnIndex = 0;
        $columnName = $searchColumns[0];
        $columnSortOrder = 'asc';
        $searchValue = '';

        if (isset($order[0]['column'])) {
            $columnIndex = $order[0]['column'];
        }
        if (isset($order[0]['dir'])) {
            $columnSortOrder = $order[0]['dir'];
        }

        if (isset($columns[$columnIndex]['data'])) {
            if (is_array($columns[$columnIndex]['data']) && isset($columns[$columnIndex]['data']['sort'])) {
                $columnName = $columns[$columnIndex]['data']['sort'];
            } else {
                error_log("Error: Column data is not properly formatted as an array or 'sort' key is missing.");
            }
        } else {
            error_log("Error: Column index $columnIndex does not exist in columns array.");
        }

        if (isset($search['value'])) {
            $searchValue = $search['value'];
        }

        if (!empty($searchValue)) {
            $query->where(function ($query) use ($searchColumns, $searchValue) {
                foreach ($searchColumns as $column) {
                    $query->orWhere($column, 'LIKE', '%' . $searchValue . '%');
                }
            });
        }

        foreach ($columns as $index => $column) {
            if (isset($column['search']['value']) && !empty($column['search']['value'])) {
                $filterValue = $column['search']['value'];
                $filterOperator = request()->query("filterOperator$index") ?? 'contain';

                switch ($filterOperator) {
                    case 'contain':
                        $query->where($column['data'], 'LIKE', '%' . $filterValue . '%');
                        break;
                    case 'notcontain':
                        $query->where($column['data'], 'NOT LIKE', '%' . $filterValue . '%');
                        break;
                    case 'equal':
                        $query->where($column['data'], '=', $filterValue);
                        break;
                    case 'notequal':
                        $query->where($column['data'], '!=', $filterValue);
                        break;
                    case 'beginwith':
                        $query->where($column['data'], 'LIKE', $filterValue . '%');
                        break;
                    case 'endwith':
                        $query->where($column['data'], 'LIKE', '%' . $filterValue);
                        break;
                    case 'greaterthan':
                        $query->where($column['data'], '>', $filterValue);
                        break;
                    case 'lessthan':
                        $query->where($column['data'], '<', $filterValue);
                        break;
                }
            }
        }

        $totalRecordswithFilter = $query->count();

        $query->orderBy($columnName, $columnSortOrder)
            ->offset($start)
            ->limit($rowperpage);

        $records = $query->get();

        $formattedRecords = $records->map($recordFormatter)->toArray();

        $response = [
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecordswithFilter,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $formattedRecords,
        ];

        return response()->json($response);
    }
}
