<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public $articles;
public function __construct() {
    $this->articles=
        [
            [
            'title' => 'iphone 14',
            'category' => 'elettronica',
            'description' => 'IPHONE 14 ',
            'visible'=> true

            ],
            [
            'title' => 'iphone 13',
            'category' => 'elettronica',
            'description' => 'IPHONE 13 128GB',
            'visible'=> true
            ],
            [
                'title' => 'iphone 15',
                'category' => 'elettronica',
                'description' => '1PHONE 15 256GB',
                'visible'=> false
                ],
        ];
    
}



public function welcome(){
    return view('welcome');
}





public function aboutUs(){
    return view('chi-sono', [
        'titolo'=>'Il mio primo progetto laravel' ,
        'descrizione'=>'oggi ho creato il mio primo progetto laravel'
    ]) ;
}


public function articles(){

    
         return view('articles',['articles'=> $this->articles]);
        
}


public function article($article){
    
    return view('article', ['article' => $this->articles[$article]]);
   
 
     
 }
}