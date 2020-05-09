<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminCreate($sentBy, $messageId)
    {
        return view('messages.admin-create', ['sentBy' => $sentBy, 'messageId' => $messageId]);
    }

    public function userCreate()
    {
        return view('messages.create');
    }

    public function sendMessage()
    {
        //admin validation
        if (request()->hasAny('id')) {
            $data = request()->validate([
                'subject' => ['required', 'string'],
                'body' => ['required', 'string', 'min:10'],
                'id' => ['required'],
                'reply_on' => ['required'],
            ]);
            auth()->user()->sent()->create([
                'received_by' => $data['id'],
                'subject' => $data['subject'],
                'body' => $data['body'],
                'status' => 1,
                'reply_on' => $data['reply_on'],
            ]);

//            auth()->user()->sendMessageTo($data['id'], $data['subject'], $data['body'], 1, $data['reply_on'], '', '', '');
        } //user validation
        else {
            $data = request()->validate([
                'subject' => ['required', 'string'],
                'body' => ['required', 'string', 'min:10'],
                'captcha' => ['required', 'captcha'],
                'phone_num' => ['required','string'],
                'sex' => ['required','string'],
                'age' => ['required']
            ]);
            auth()->user()->sent()->create([
                'received_by' => 1,
                'subject' => $data['subject'],
                'body' => $data['body'],
                'status' => 1,
                'phone_num' => $data['phone_num'],
                'sex' => $data['sex'],
                'age' => $data['age'],
            ]);
//            auth()->user()->sendMessageTo(1, $data['subject'], $data['body'], 1, '', $data['phone_num'], $data['sex'], $data['age']);
        }


        return redirect()->route('member', auth()->user()->username);

    }

    public function updateStatus($messageId){

        auth()->user()->receive->find($messageId)->update(['status' => 0]);
    }

}
