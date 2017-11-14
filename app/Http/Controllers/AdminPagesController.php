<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function admin_authorization () {
        return view('admin/admin_authorization');
    }
}
