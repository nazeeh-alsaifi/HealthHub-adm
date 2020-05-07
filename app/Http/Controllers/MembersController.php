<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class MembersController extends Controller
{
       public function __construct()
          {
              $this->middleware('members');
          }

        // users methods
        public function member($username)
        {
        //dd($username);
        // dd(Auth::user()->where('username','Like',$username)->first());
        $most_viewed=Article::orderBy('views','DESC')->get()->take(3);

        $articles = Article::orderBy('created_at','DESC')->get();
        if ($username == 'admin') {

                return redirect()->route('admin');
               }

       // else if(Auth::user()->where('username','Like',$username)->first() != null){

       //return view('home',['most_viewed' => $most_viewed,'articles' =>$articles]);
       // }

        else {

                return view('home',['most_viewed' => $most_viewed,'articles' =>$articles]);;
            }
            //-------------end
        }
}
