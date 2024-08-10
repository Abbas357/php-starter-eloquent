<?php

namespace App\Controllers;

use App\Support\Storage;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('users/index');
    }

    public function create()
    {
        return view('users/create');
    }

    public function data()
    {
        $user = User::where('office', 'IT');
        $searchable = ['name', 'email', 'designation', 'office'];
        $records = function ($record) {
            return [
                'id' => $record->id,
                'name' => $record->name,
                'email' => $record->email,
                'designation' => $record->designation,
                'office' => $record->office
            ];
        };

        return $this->DataTable($user, $searchable, $records);
    }

    public function store()
    {
        request()->validate([
            'name' => 'required|min:4|max:20|alpha',
            'email' => 'required|email|unique:users,email',
            'mobile_number' => 'required|number|mobile',
            'office' => 'required',
            'designation' => 'required',
            'password' => 'required|strong_password',
            'profile_pic' => 'nullable|file|image|valid_file',
        ]);

        $file = request()->hasFile('profile_pic') ? request()->file('profile_pic') : null;
        $profilePicPath = $this->handleFileUpload($file);

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => password_hash(request('password'), PASSWORD_BCRYPT),
            'mobile_number' => request('mobile_number'),
            'office' => request('office'),
            'designation' => request('designation'),
            'profile_pic' => $profilePicPath,
        ]);

        if ($user) {
            setFlash('success', 'User created successfully with ID: ' . $user->id);
        } else {
            setFlash('danger', 'There was an error creating the user.');
        }

        redirectToRoute('users.create');
    }


    public function edit($id)
    {
        $user = User::find($id);
        return response()->json(['users' => $user]);
    }

    public function update($id)
    {
        $user = User::find($id);
        return response()->json(['users' => $user]);
    }

    public function show($id)
    {
        $user = User::find($id);
        return response()->json(['users' => $user]);
    }

    public function delete($id)
    {
        $user = User::find($id);
        $deleted = $user->delete();
        if ($deleted) {
            setFlash('success', 'User is delete successfully.');
            redirectToRoute('users.index');
        }
        setFlash('danger', 'There was an error deleting the user.');
        redirectToRoute('users.index');
    }

    private function handleFileUpload($file)
    {
        if ($file && !empty($file['name'])) {
            $uploadedPath = Storage::save($file, 'images/users', 'image');
            if ($uploadedPath) {
                return $uploadedPath;
            } else {
                throw new \Exception('Error uploading image.');
            }
        }
        return null;
    }
}
