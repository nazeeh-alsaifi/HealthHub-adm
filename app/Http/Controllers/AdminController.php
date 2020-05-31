<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Article;
use Intervention\Image\ImageManagerStatic as Image;
Use Alert;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
        $this->middleware('revalidate');
    }

    public function admin()
    {

        $most_viewed = Article::orderBy('views', 'DESC')->get()->take(3);

        $articles = Article::orderBy('created_at', 'DESC')->get();
        $list1 = auth()->user()->receive->reverse()->where('status', 1);
        $list2 = auth()->user()->receive->reverse()->where('status', 0);
        $messages = array_merge($list1->all(), $list2->all());

        return view('admin', ['most_viewed' => $most_viewed, 'articles' => $articles,'messages' => $messages ]);
    }

    public function create()
    {

        return view('articles.create');
    }

    public function store()
    {
        Article::orderBy('article_id', 'desc')->increment('article_id');

        $data = request()->validate([
            'image' => 'required|image',
            'title' => 'required',
            'description' => 'required',
            'content' => 'required']);

  if ($image = $data['image']) {

        $destinationPath = 'public/images'; // upload path
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //dd($profileImage);


        $image->move($destinationPath, $profileImage);
        $image= Image::make(public_path("{$destinationPath}/{$profileImage}"));
        $image->fit(1200,1000);
        $image->save();
}
        Article::create([
                     'image' => $profileImage,
                     'title' => $data['title'],
                     'description' => $data['description'],
                     'content' => $data['content']
                     ]);

        return redirect('/home/admin')->with('success','The article has been added successfully');


    }

    public function edit($article_id)
    {

        $articleInfo = Article::where('article_id', '=', $article_id)->first();


        return view('articles.edit', compact('articleInfo'));
    }

    public function updatearticle($article_id)
    {
        $data = request()->validate([
            'image' => '|image',
            'title' => 'required',
            'description' => 'required',
            'content' => 'required']);

        if($image = $data['image']){

               $destinationPath = 'public/images'; // upload path
               $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
               $image->move($destinationPath, $profileImage);
               $image= Image::make(public_path("{$destinationPath}/{$profileImage}"));
               $image->fit(1200,1000);
               $image->save();

         $imageArray = ['image' => $profileImage];
        }

        Article::where('article_id', '=', $article_id)->update(array_merge($data, $imageArray ?? []));

        return redirect('/home/admin')->with('success','Changes have been Saved');
    }

    public function delete($article_id)
    {


        Article::where('article_id', '=', $article_id)->delete();

        Article::where('article_id', '>', $article_id)->decrement('article_id');

        return redirect('/home/admin')->with('success','Article deleted successfully');

    }

}
