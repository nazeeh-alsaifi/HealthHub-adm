<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create(){
        return view('messages.create');
    }

    public function sendMessage(){
        $data = request()->validate([
            'subject' => ['required','string'],
            'body' => ['required','string','min:10'],
            'captcha' => ['required','captcha'],
        ]);

        auth()->user()->sent()->create([
            'subject' => $data['subject'],
            'body' => $data['body'],
            'received_by' => 1,
            'status' => 1,
        ]);

        return redirect('/home');


    }
}
