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
        $users = User::all()->where('role', '<>', 'admin')
                            ->where('id','<>', Auth::user()->id);
        return view ('pages.addpublication', ['PublishHouses' => $PublishHouses, 'users'=>$users]);
    }

    public function addpublication(\Illuminate\Http\Request $request)
    {
        $publication = new Publication;
        $publication['publishing_houses_id'] = $request['publishing_houses_id'];
        $publication['name_of_publication'] = $request['name_of_publication'];
        $publication['annotation'] = $request['annotation'];
        $publication['number_of_publication'] = $request['number_of_publication'];
        $publication['number_of_pages'] = $request['number_of_pages'];
        $publication['year'] = $request['year'];
        $publication['user_id'] = Auth::user()->id; //кто именно внёс запись в БД
        $publication->save();
        $publication->users()->attach(Auth::user()->id);
        for ($i = 1; $i < 30; $i++)
        {
            if($request['user'.$i])
                $publication->users()->attach($request['user'.$i]);
        }

        return redirect()->route('account');
    }
}
