<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Article;
use Intervention\Image\ImageManagerStatic as Image;

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
    //  dd(  Article::latest()->increment('article_id'));
         $image= Image::make(public_path("storage/{imagePath}"))->fit(1200,500);
         dd($image);
        $image->save();
          //Image::make(request('image')->getRealPath())->fit(1500, 700)->save(public_path("storage/{imagePath}"));
         // dd($image_resize);
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
  $imagePath = request('image')->store('articleImage', 'public');
  //dd($imagePath);
         $image= Image::make(public_path("storage/{imagePath}"))->fit(1200,500);
        // dd($image);
         $image->save();
         $imageArray = ['image' => $imagePath];

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
