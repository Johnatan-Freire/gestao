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
        $request->validate(
            [
                'name' => ['required', 'min:3'],
                'email' => ['required', 'email'],
                'phone'=> ['required', 'min:11', 'regex:/^\(\d{2}\) \d \d{4}-\d{4}$/'],
                'subject' => ['required'],
                'message' => ['required'],
            ],
            [
                'name.required' => 'Preencha este campo.',
                'name.min' => 'Isira um nome válido.',
                'email.required' => 'Preencha este campo.',
                'email.email' => 'Insira um e-mail válido.',
                'phone.required' => 'Preencha este campo.',
                'phone.min' => 'Insira um número para contato válido.',
                'phone.regex' => 'Insira um número para contato válido.',
                'subject.required' => 'Preencha este campo.',
                'message.required' => 'Preenche este campo.',
            ],
        );
        Contact::create($request->all());

        return redirect()->route('site.index');
    }
}
