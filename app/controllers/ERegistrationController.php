<?php

namespace App\Controllers;

use App\Models\ERegistration;

class ERegistrationController extends Controller
{
    public function index()
    {
        return view('eregistration/index');
    }

    public function create()
    {
        return view('eregistration');
    }

    public function data()
    {
        $user = ERegistration::where('status', 'p');
        $searchable = ['categoryAppliedFor', 'NameOfContractor', 'address', 'categoryPEC', 'CNICNumber', 'district', 'pec_no', 'owner_name', 'fbrNONTN', 'KPRARegNo', 'Email', 'mobNo', 'RegLimted'];
        $records = function ($record) {
            return [
                'id' => $record->id,
                'categoryAppliedFor' => $record->categoryAppliedFor,
                'NameOfContractor' => $record->NameOfContractor,
                'address' => $record->address,
                'categoryPEC' => $record->categoryPEC,
                'CNICNumber' => $record->CNICNumber,
                'district' => $record->district,
                'pec_no' => $record->pec_no,
                'owner_name' => $record->owner_name,
                'fbrNONTN' => $record->fbrNONTN,
                'KPRARegNo' => $record->KPRARegNo,
                'Email' => $record->Email,
                'mobNo' => $record->mobNo,
                'RegLimted' => $record->RegLimted,
                'agree' => $record->agree,
                'created_at' => $record->created_at,
                'status' => $record->status,
                'defer' => $record->defer,
            ];
        };

        return $this->DataTable($user, $searchable, $records);
    }

    public function store()
    {
        request()->validate([
            'type' => 'required',
            'name' => 'required',
        ]);
        $ERegistration = ERegistration::create([
            'type' => request('type'),
            'name' => request('name'),
        ]);

        if ($ERegistration) {
            setFlash('success', 'Collection Created Successfully');
        } else {
            setFlash('danger', 'Error creating collection');
        }

        redirectToRoute('collections.index');
    }

    public function defer($id)
    {
        $ERegistration = ERegistration::find($id);
        if ($ERegistration) {
            if ($ERegistration->defer < 2) {
                $ERegistration->defer += 1;
                $ERegistration->save();
                return response()->json(['success' => 'Registration has been deferred successfully.']);
            } else {
                $ERegistration->delete();
                return response()->json(['success' => 'Registration has been deleted successfully.']);
            }
        }
        return response()->json(['error' => 'Uh Oh! Registration not found.']);
    }

    public function delete($id)
    {
        $ERegistration = ERegistration::find($id);
        $deleted = $ERegistration->delete();
        if ($deleted) {
            return response()->json(['success' => 'Registrations is delete successfully.']);
        }
        return response()->json(['error' => 'Uh Oh! Registration is not deleted']);
    }
}
