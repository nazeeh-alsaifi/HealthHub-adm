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
        Article::orderBy('article_id', 'desc')->increment('article_id');

        $data = request()->validate([
            'image' => 'required|image',
            'title' => 'required',
            'description' => 'required',
            'content' => 'required']);

        $imagePath = request('image')->store('uploads', 'public');

        $image= Image::make(public_path("storage/{$imagePath}"));
        $image->fit(1200,1000);
        $image->save();

        Article::create([
                     'image' => $imagePath,
                     'title' => $data['title'],
                     'description' => $data['description'],
                     'content' => $data['content']
                     ]);

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

if(request('image')){
        $imagePath = request('image')->store('articleImage', 'public');

        $image= Image::make(public_path("storage/{$imagePath}"));
        $image->fit(1200,1000);
        $image->save();
        $imageArray = ['image' => $imagePath];
        }

        Article::where('article_id', '=', $article_id)->update(array_merge($data, $imageArray ?? []));
 //if($data ==false){return redirect('/admin/article/article_num={$article_id}/edit')->with(Alert::question('Question Title', 'Question Message'));

        return redirect('/home/admin');
        //  toast('you have submitted changes successfully','success');
    }

    public function delete($article_id)
    {


        Article::where('article_id', '=', $article_id)->delete();

        Article::where('article_id','>',$article_id)->decrement('article_id');

        return redirect('/home/admin');
    }

    public function msg(){
    if(Alert::question('Are you sure?', 'Question Message') == true){

    toast('you have submitted changes successfully','success');

    return redirect('/home/admin');
    }
    }

}
