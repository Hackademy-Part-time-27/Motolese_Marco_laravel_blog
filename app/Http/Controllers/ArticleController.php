<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreArticleRequest;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;


class ArticleController extends Controller
{

public function index(){

    
        $articles = Article::where('user_id', auth()->user()->id)
                            ->orderBy('created_at', 'DESC')
                            ->get();

        return view('articles.index', ['articles' => $articles]);
    
}



    public function create(){
        return view('articles.create', ['categories' => \App\Models\Category::all()]);

    }

    public function store(StoreArticleRequest $request){
        $article = Article::create(array_merge($request->all(), ['user_id' => auth()->user()->id]));

        $article->categories()->attach($request->categories);

        // Qui ci assicuriamo che il file esista e sia stato caricato correttamente
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            
            $extension = $request->file('image')->extension();

            $fileName = 'image.' . $extension;

            $fileName = $request->file('image')->getClientOriginalName();

            $fileName = uniqid('image_') . '.' . $extension;

            // storeAs restituisce il percorso relativo, a partire da storage/app, del file salvato su disco
            $article->image = $request->file('image')->storeAs('public/images/' . $article->id, $fileName);

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


    public function search()
    {
    

        return view('articles.search');
    }

}
