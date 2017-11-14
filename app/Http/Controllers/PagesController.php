<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function education () {
        return view('pages/education');
    }
    public function science () {
        return view('pages/science');
    }
    public function contacts () {
        return view('pages/contacts');
    }
    public function authorization () {
        return view('pages/authorization');
    }

    public function account () {
      return view('pages/account');
    }
}
