<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    function index(){
        return view('site.contact');
    }

    public function store(Request $request){
        Contact::create($request->all());

        return redirect()->route('site.index');
    }
}
