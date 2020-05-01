<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $fillable = ['body', 'subject', 'sent_by', 'received_by', 'status'];

    public function sender(){
        return $this->belongsTo(User::class,'sent_by');
    }

    public function receiver(){
        return $this->belongsTo(User::class,'received_by');
    }
}
