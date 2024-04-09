<?php


use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class,'welcome','title'=>'$title'])->name('welcome');
;



Route::get('/contatti',[ContactController::class,'viewForm'])->name('contatti');
;


Route::post('/contatti/send',[ContactController::class,'send'])->name('contatti.send');
;



Route::get('/chi-sono',[PageController::class,'aboutUs'])->name('about-us');




Route::get('/articles',[PageController::class,'articles'])->name('articles');


Route::get('/articolo/{article}',[PageController::class,'article'] )->name('article');

Route::get('/account/articles/create',[ArticleController::class,'create'])->name('articles.create');

Route::get('/account/articles',[ArticleController::class,'index'])->name('articles.index');


Route::post('/account/articles/store',[ArticleController::class,'store'])->name('articles.store');