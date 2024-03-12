<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/contatti', function () {
    return view('contatti', [
        'contatti'=>'i miei contatti'
    ]);
});



Route::get('/chi-sono', function () {
    return view('chi-sono', [
        'titolo'=>'Il mio primo progetto laravel' ,
        'descrizione'=>'oggi ho creato il mio primo progetto laravel'
    ]);
});
