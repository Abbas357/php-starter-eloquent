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
        $user = User::where('status', 0);
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
        $data = [
            'user' => $user
        ];
        return view('users/edit', $data);
    }

    public function update($id)
    {
        $user = User::find($id);

        if (!$user) {
            setFlash('danger', 'User not found.');
            return redirectToRoute('users.index');
        }

        request()->validate([
            'name' => 'nullable|min:4|max:20|alpha',
            'email' => 'nullable|email',
            'mobile_number' => 'nullable|number|mobile',
            'office' => 'nullable',
            'designation' => 'nullable',
            'password' => 'nullable|strong_password',
            'profile_pic' => 'nullable|file|image|valid_file',
        ]);

        $file = request()->hasFile('profile_pic') ? request()->file('profile_pic') : null;
        if ($file) {
            if ($user->profile_pic) {
                $this->removeFile($user->profile_pic);
            }

            $profilePicPath = $this->handleFileUpload($file);
        } else {
            $profilePicPath = $user->profile_pic;
        }

        $user->update([
            'name' => request('name', $user->name),
            'email' => request('email', $user->email),
            'password' => request('password') ? password_hash(request('password'), PASSWORD_BCRYPT) : $user->password,
            'mobile_number' => request('mobile_number', $user->mobile_number),
            'office' => request('office', $user->office),
            'designation' => request('designation', $user->designation),
            'profile_pic' => $profilePicPath,
        ]);

        setFlash('success', 'User updated successfully');
        return redirectToRoute('users.index');
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
            return response()->json(['success' => 'User is delete successfully.']);
        }
        return response()->json(['error' => 'Uh Oh! User is not deleted']);
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

    protected function removeFile($filePath)
    {
        $fullPath = storage_path(). '/' . $filePath;

        if (file_exists($fullPath)) {
            unlink($fullPath);
        }
    }
}
