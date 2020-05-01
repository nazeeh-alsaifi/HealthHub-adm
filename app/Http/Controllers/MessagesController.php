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

    public function store(Request $request){
        dd($request);
//        $data = $request->validate([
//            'content' => ['required','string','min:10'],
//            'captcha' => ['required','captcha'],
//        ]);
//        $user= auth()->user();
//        $user->consults()->create([
//            'content' => $data['content'],
//            'sent_by' => $user->username,
//            'received_by' => 'admin1'
//        ]);
//        return redirect('/home');


    }
}
