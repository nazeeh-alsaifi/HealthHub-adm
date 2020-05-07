<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
     //   $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    $most_viewed=Article::orderBy('views','DESC')->get()->take(3);
    $articles = Article::orderBy('created_at','DESC')->get();
     Auth::logout();
        return view('home',['most_viewed' => $most_viewed,'articles' =>$articles]);
    }


    public function show($article_id)
        {

            Article::where('article_id', '=', $article_id)->increment('views');

            $articleInfo = Article::where('article_id', '=', $article_id)->first();

            return view('articles.show', compact('articleInfo'));
        }
}

