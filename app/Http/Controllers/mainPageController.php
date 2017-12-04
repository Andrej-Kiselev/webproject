<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use App\Publication;

class mainPageController extends Controller
{
    public function index () {
        return view('pages.main');
    }

    public function updateImage (Request $request) {
        if ($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->save(public_path('/images/'.$filename));

            $user = Auth::user();
            $user->image=$filename;
            $user->save();

            $publUsers = Publication::getTablePublicationUsers();
            $publications = Publication::all();
            return view('pages/account', ['publUsers' => $publUsers, 'publications' => $publications]);
        }
    }

    public function deletePublic($id){
        if (!$id)
            echo "Nothing to watch!";
        else {
            Publication::findOrFail($id)->delete();
            return redirect()->to('account');
        }
    }


}
