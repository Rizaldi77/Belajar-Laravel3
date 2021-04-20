<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Form;
use App\Models\Post;
use DB;

class FormController extends Controller
{
    public function create()
    {
        $data = DB::table('blogs')->get();
        return view('pages.form', compact('data'));
    }

    public function proses(Request $request)
    {
        Form::create([
            'name' => request('name'),
            'address' => request('address'),
            'instansi' => request('instansi'),
            'noktp' => request('noktp'),
            'notelp' => request('notelp'),
            'email' => request('email'),
            'loket' => request('loket'),
            'keperluan' => request('keperluan')
        ]);
 
        return view('pages.proses');
    }
    
}
