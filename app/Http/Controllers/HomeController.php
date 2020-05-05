<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

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
        $most_viewed = Article::orderBy('views', 'DESC')->get()->take(3);
        //dd($most_viewed);
        $articles = Article::orderBy('created_at', 'DESC')->get();
        if ($username == 'admin') {

            return view('admin', compact('username'), ['most_viewed' => $most_viewed, 'articles' => $articles]);
        } else {

            return view('home', ['most_viewed' => $most_viewed, 'articles' => $articles]);
        }
        //-------------end
    }
}
