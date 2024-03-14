<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
;



Route::get('/contatti', function () {
    return view('contatti', [
        'contatti'=>'i miei contatti'
    ]);
})->name('contacts');
;



Route::get('/chi-sono', function () {
    return view('chi-sono', [
        'titolo'=>'Il mio primo progetto laravel' ,
        'descrizione'=>'oggi ho creato il mio primo progetto laravel'
    ]) ;
})->name('about-us');

;



Route::get('/articles', function () {
   
    $articles = [
        [
        'title' => 'iphone 14',
        'category' => 'elettronica',
        'description' => 'IPHONE 14 '
        ],
        [
        'title' => 'iphone 13',
        'category' => 'elettronica',
        'description' => 'IPHONE 13 128GB'
        ],
        [
            'title' => 'iphone 15',
            'category' => 'elettronica',
            'description' => '1PHONE 15 256GB'
            ],
    ];
    return view('articles', ['title'=>'articoli', 'articles' => $articles]);
})->name('articles');
Route::get('/articolo/{article?}', function ($article) {

    $index = $article;

    $articles = [
        [
            'title' => 'iphone 14',
            'category' => 'elettronica',
            'description' => 'telefono nuovo'
            ],
            [
            'title' => 'iphone 13',
            'category' => 'elettronica',
            'description' => 'telefono nuovo'
            ],
            [
                'title' => 'iphone 12',
                'category' => 'elettronica',
                'description' => 'telefono nuovo'
                ]
       
            ];
            if(array_key_exists($index, $articles)){
                return view('article', ['article' => $articles[$index]]);
                }else{
                    abort(404);
                }
            })->name('article');