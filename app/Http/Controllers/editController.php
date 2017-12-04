<?php

namespace App\Http\Controllers;

use App\Publication;
use Illuminate\Http\Request;

class editController extends Controller
{
    public function show ($id) {
        $list = Publication::findOrFail($id);

        return view('pages.editPubl', compact('list'));
    }

    public function edit ($id) {
        $list = Publication::findOrFail($id);
        return view('pages.editPubl', compact('list'));
    }

    public function update ($id, Request $request){
        $upd = Publication::findOrFail($id);
        $upd->update($request->all());
        return redirect()->to('account');
    }
}
