<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class PageController extends Controller
{
  





public function welcome(){
    $articles = Article::orderBy('created_at', 'DESC')->take(5)->get();
    return view('welcome', ['title' => 'sdsfdsfasdf', 'articles' => $articles]);

}





public function aboutUs(){
    return view('chi-sono', [
        'titolo'=>'Il mio primo progetto laravel' ,
        'descrizione'=>'oggi ho creato il mio primo progetto laravel'
    ]) ;
}


public function articles(){

    $articles = Article::where('visible',true)->get();
         return view('articles',['articles'=> $articles]);
        
}


public function article(Article $article){
    
    return view('article', ['article' => $article]);
   
 
     
 }



 public function searchUsers(){
    return view('search-users');
 }

}