<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function create(){
        return view('articles.create');
    }
      public function show(){
            return view('articles.show');
            //return view('articles.show',$article_id);
        }
}
