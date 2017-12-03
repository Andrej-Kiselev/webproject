<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function index()
    {
        return view('admin.admin_authorization');
    }

    public function addUser(\Illuminate\Http\Request $request)
    {
        $user = new User();
        $inputUserData = $request->all();
        $inputUserData['password'] = bcrypt($request['password']);

        User::create($inputUserData);
        return view('admin.admin_authorization');
    }

    public function deleteUser($id){
        if (!$id)
            echo "Nothing!";
        else {
            User::findOrFail($id)->delete();
            $usersList = User::all()->where('role', '<>', 'admin');
            return view('admin.admin_authorization', compact('usersList'));
        }
    }

}