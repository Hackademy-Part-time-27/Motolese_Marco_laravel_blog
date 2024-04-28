<?php


use App\Http\Controllers\PageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AccountController;
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

    Route::prefix('account')->middleware('auth')->group(function () {

            Route::get('/articles/create',[ArticleController::class,'create'])->name('articles.create');

            Route::get('/articles',[ArticleController::class,'index'])->name('articles.index');

            Route::post('/articles/store',[ArticleController::class,'store'])->name('articles.store');

            Route::get('/', [AccountController::class, 'index'])->name('account.index');
            
            Route::put('/articles/update', [ArticleController::class, 'update'])->name('articles.update');

            Route::get('/articles/edit', [ArticleController::class, 'edit'])->name('articles.edit');

            Route::delete('/articles/destroy', [ArticleController::class, 'destroy'])->name('articles.destroy');
            
            Route::resource('/categories', CategoryController::class);

});

Route::get('/counter',App\Livewire\Counter::class);

Route::get('/cerca-utenti',[PageController::class,'searchUsers'])->name('users.search');

Route::get('/cerca-articoli',[ArticleController::class,'search'])->name('articles.search');