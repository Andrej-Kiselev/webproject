<?php

namespace App\Http\Controllers;

use App\PublishingHouse;
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
        return redirect()->to('admin');
    }

    public function deleteUser($id){
        if (!$id)
            echo "Nothing to watch!";
        else {
            User::findOrFail($id)->delete();
            return redirect()->to('admin');
        }
    }

    public function addPublic (Request $request) {
        $publish = $request->all();
        $inputReq = $publish['name'];
        PublishingHouse::create($publish);
        return redirect()->to('admin');
    }

    public function deletePublic($id){
        if (!$id)
            echo "Nothing to watch!";
        else {
            PublishingHouse::findOrFail($id)->delete();
            return redirect()->to('admin');
        }
    }
}