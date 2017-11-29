<?php

namespace App\Http\Controllers;

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
        return view('pages/account');
    }
}