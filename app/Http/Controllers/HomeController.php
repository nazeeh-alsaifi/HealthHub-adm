<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    // users methods
    public function user($username)
    {
        if ($username == 'admin') {

            return view('admin', compact('username'));
        } else {

            return view('home', compact('username'));
        }
        //-------------end
    }
}
