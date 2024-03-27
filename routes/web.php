<?php


use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
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