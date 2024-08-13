<?php

namespace App\Controllers;

use App\Support\Storage;

use App\Models\ERegistration;
use App\Models\Collection;
use App\Models\District;

class ERegistrationController extends Controller
{
    public function index()
    {
        return view('eregistration/index');
    }

    public function create()
    {
        $data = [
            'districts' => District::all(),
            'contractor_category' => Collection::where('type', 'contractor_category')->get(),
            'provincial_entities' => Collection::where('type', 'provincial_entities')->get(),
        ];
        return view('eregistration', $data);
    }

    public function data()
    {
        $defer = ($defer = request()->query('defer') ?? 0) >= 0 && $defer <= 3 ? $defer : 0;
        $user = ERegistration::where('defer', $defer);
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
        // dd(request());
        request()->validate([
            'nameOfOwner' => 'required|min:4|max:100|alpha',
            'Email' => 'required|email|unique:onlinecontreg,email',
            'mobNo' => 'required|mobile',
            'pec_no' => 'required|min:4|max:20',
            'CNICNumber' => 'required|cnic',
            'fbrNONTN' => 'required',
            'KPRARegNo' => 'required',
            'district' => 'required',
            'categoryAppliedFor' => 'required',
            'NameOfContractor' => 'required|min:4|max:100',
            'address' => 'required|min:10|max:255',
            'categoryPEC' => 'required',
            'RegLimted' => 'required',
            'cnicFront' => 'required|file|valid_file',
            'cnicBack' => 'required|file|valid_file',
            'fbrRegistration' => 'required|file|valid_file',
            'kippraCertificate' => 'required|file|valid_file',
            'pecCert' => 'required|file|valid_file',
            'FormH' => 'nullable|file|valid_file',
            'previousEnlistment' => 'nullable|file|valid_file',
            'agree' => 'required|boolean',
        ]);

        $cnicFront = Storage::save(request()->file('cnicFront'), 'registrations/cnic', 'file');
        $cnicBack = Storage::save(request()->file('cnicBack'), 'registrations/cnic', 'file');
        $fbrRegistration = Storage::save(request()->file('fbrRegistration'), 'registrations/fbr', 'file');
        $kippraCertificate = Storage::save(request()->file('kippraCertificate'), 'registrations/kippra', 'file');
        $pecCert = Storage::save(request()->file('pecCert'), 'registrations/pec', 'file');
        $formH = request()->hasFile('FormH') ? Storage::save(request()->file('FormH'), 'registrations/formh', 'file') : null;
        $previousEnlistment = request()->hasFile('previousEnlistment') ? Storage::save(request()->file('previousEnlistment'), 'registrations/pre-enlistment', 'file') : null;

        $registration = new ERegistration();
        $registration->owner_name = request('nameOfOwner');
        $registration->email = request('Email');
        $registration->mobNo = request('mobNo');
        $registration->pec_no = request('pec_no');
        $registration->CNICNumber = request('CNICNumber');
        $registration->fbrNONTN = request('fbrNONTN');
        $registration->KPRARegNo = request('KPRARegNo');
        $registration->district = request('district');
        $registration->categoryAppliedFor = request('categoryAppliedFor');
        $registration->NameOfContractor = request('NameOfContractor');
        $registration->address = request('address');
        $registration->categoryPEC = request('categoryPEC');
        $registration->RegLimted = request('RegLimted');
        $registration->CNICUploadFront = $cnicFront;
        $registration->CNICUploadBack = $cnicBack;
        $registration->fbrUpload = $fbrRegistration;
        $registration->KIPRAUpload = $kippraCertificate;
        $registration->PEC2020 = $pecCert;
        $registration->FormHUpload = $formH;
        $registration->PreEnlistmentUpload = json_encode($previousEnlistment);
        $registration->agree = request('agree');
        $registration->status = 'pending';
        $registration->save();
        if ($registration) {
            setFlash('success', 'Registration successfully! You will soon be notified by email...');
        } else {
            setFlash('danger', 'Uh Oh! Registration is not successfull');
        }

        redirectToRoute('registrations.apply');
    }


    public function defer($id)
    {
        $ERegistration = ERegistration::find($id);
        if ($ERegistration->defer < 3) {
            $ERegistration->defer += 1;
            $ERegistration->save();
            return response()->json(['success' => 'Registration has been deferred successfully.']);
        }
        return response()->json(['error' => 'Registration can\'t be deferred further.']);
    }
}
