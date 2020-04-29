<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function create(){
        return view('articles.create');
    }
      public function show(){
      //$title="hello there";
      //return view('articles.show',compact('title'));
            return view('articles.show');
        }
}
