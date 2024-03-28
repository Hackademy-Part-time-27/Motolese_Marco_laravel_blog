<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
public function create(){
    Article::create([
        'title' =>'iphone 12',
        'category' => 'elettronica',
        'description' => 'IPHONE 12 ',
        'body'=> '...',
        ]);
}


}
