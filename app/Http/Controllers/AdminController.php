<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Article;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function admin(){

    $most_viewed=Article::orderBy('views','DESC')->get()->take(3);

    $articles = Article::orderBy('created_at','DESC')->get();

    return view('admin',['most_viewed' => $most_viewed,'articles' =>$articles]);
    }

    public function create()
    {

        return view('articles.create');
    }

    public function store()
    {

        $data = request()->validate([
            'image' => 'required|image',
            'title' => 'required',
            'description' => 'required',
            'content' => 'required']);
//dd(Article::orderBy('article_id', 'desc')->increment('article_id'));


        $imagePath = request('image')->store('uploads', 'public');
        Article::create([

            'image' => $imagePath,
            'title' => $data['title'],
            'description' => $data['description'],
            'content' => $data['content']
            ]);
        Article::orderBy('article_id', 'desc')->increment('article_id');
        // $image= image::make(public_path("storage/{imagePath}"))->fit(1200,500);
        // $image->save();
        return redirect('/home/admin');


    }

    public function edit($article_id)
    {

        $articleInfo = Article::where('article_id', '=', $article_id)->first();


        return view('articles.edit', compact('articleInfo'));
    }

    public function update($article_id)
    {

        $data = request()->validate([
            'image' => '|image',
            'title' => 'required',
            'description' => 'required',
            'content' => 'required']);

        if (request('image')) {
            $imagePath = request('image')->store('articleImage', 'public');
            // $image= image::make(public_path("articleProfile/{imagePath}"))->fit(1200,500);
            // $image->save();
            $imageArray = ['image' => $imagePath];
        }

        Article::where('article_id', '=', $article_id)->update(array_merge($data, $imageArray ?? []));

        return redirect('/home/admin');
    }

    public function delete($article_id)
    {


        Article::where('article_id', '=', $article_id)->delete();

        Article::where('article_id','>',$article_id)->decrement('article_id');

        return redirect('/home/admin');
    }
}
