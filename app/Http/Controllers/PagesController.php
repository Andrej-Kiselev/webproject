<?php

namespace App\Http\Controllers;

use App\Publication;
use App\PublishingHouse;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('pages/account');
    }

    public function showFormToAddPublication()
    {
        $PublishHouses = PublishingHouse::all();
        return view ('pages.addpublication', ['PublishHouses' => $PublishHouses]);
    }

    public function addpublication(\Illuminate\Http\Request $request)
    {
        $inputPublicationData = $request->all();
        $inputPublicationData['user_id'] = Auth::user()->id;
        Publication::create($inputPublicationData);
        return view('pages/account');
    }
}
