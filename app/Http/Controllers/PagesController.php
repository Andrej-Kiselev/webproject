<?php

namespace App\Http\Controllers;

use App\Publication;
use App\PublishingHouse;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function education()
    {
        return view('pages/education');
    }

    public function science()
    {
        return view('pages/science');
    }

    public function contacts()
    {
        return view('pages/contacts');
    }

    public function authorization()
    {
        return view('pages/authorization');
    }

    public function account()
    {
        $publUsers = Publication::getTablePublicationUsers();
        $publications = Publication::all();
        return view('pages/account', ['publUsers' => $publUsers, 'publications' => $publications]);
    }

    public function showFormToAddPublication()
    {
        $PublishHouses = PublishingHouse::all();
        $users = User::all()->where('role', '<>', 'admin');
        return view ('pages.addpublication', ['PublishHouses' => $PublishHouses, 'users'=>$users]);
    }

    public function addpublication(\Illuminate\Http\Request $request)
    {
        $inputPublicationData = $request->all();
        $inputPublicationData['user_id'] = Auth::user()->id;
        Publication::create($inputPublicationData);
        return redirect()->route('account');
    }
}
