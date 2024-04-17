<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreArticleRequest;
use Illuminate\Http\Request;
use App\Models\Article;



class ArticleController extends Controller
{

public function index(){
    return view ('articles.index',['articles' => Article::all()]);
}



    public function create(){
        return view('articles.create', ['categories' => \App\Models\Category::all()]);
    }

    public function store(Request $request){

        $article = Article::create($request->all());

        if($request->hasFile('image') && $request->file('image')->isValid()){
          


    $extension = $request->file('image')->extension();
    $fileName = 'image.' .$extension;
    $fileName = uniqid('image_'). '.' .$extension;


  $article->image = $request->file('image')->storeAs('public/images/' .$article->id,$fileName);
  $article->save();

        }

        return redirect()->route('articles.index')->with(['success' => 'Articolo creato correttamente!']);
    
    }

    
    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article, 'categories' => Category::all()]);
    }

    public function update(Request $request, Article $article,)
    {
        $article->update($request->all());

        return redirect()->back()->with(['success' => 'Articolo modificato correttamente!']);
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->back()->with(['success' => 'Articolo eliminato!']);
    }

}
