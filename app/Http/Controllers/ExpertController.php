<?php

namespace App\Http\Controllers;
use App\expert_alg\bayes;
use Illuminate\Http\Request;
class ExpertController extends Controller
{
    function __construct()
    {
        $bayes = new bayes(public_path('bayes_training.csv'));
        $this->middleware('auth');
    }

    function userCreate(){
        return view('expert_system.create');
    }

    function predict(){
        dd(request()->all());
    }
}
