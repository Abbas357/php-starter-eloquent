<?php

namespace App\Controllers;

use App\Models\Collection;

class CollectionController extends Controller
{
    public function index()
    {
        $perPage = 5;
        $currentPage = request()->query('page') ??  1;
        $totalCategories = Collection::count();
        $offset = ($currentPage - 1) * $perPage;
        $categories = Collection::skip($offset)->take($perPage)->get();
        $totalPages = ceil($totalCategories / $perPage);
        $data = [
            'categories' => $categories,
            'totalPages' => $totalPages,
            'currentPage' => $currentPage,
        ];
        return view('collections/index', $data);
    }

    public function store()
    {
        request()->validate([
            'type' => 'required',
            'name' => 'required',
        ]);
        $collection = Collection::create([
            'type' => request('type'),
            'name' => request('name'),
        ]);

        if ($collection) {
            setFlash('success', 'Collection Created Successfully');
        } else {
            setFlash('danger', 'Error creating collection');
        }

        redirectToRoute('collections.index');
    }

    public function delete($id)
    {
        $collection = Collection::find($id);
        $deleted = $collection->delete();
        if ($deleted) {
            setFlash('success', 'Collection deleted successfully');
        } else {
            setFlash('danger', 'Uh Oh! Collection cannnot be deleted.');
        }
        redirectToRoute('collections.index');
    }
}
