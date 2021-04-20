<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Form;
use App\Models\Post;

class FormController extends Controller
{
    public function create()
    {
    	return view('pages.form');
    }

    public function combo()
    {
        $katdb = Form::lists('id, namaloket';
        return view::('combo')->with('')
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
        //dd($request->all());
 
        //return view('pages.proses', ['input' => $loket]);
    }
    
}
