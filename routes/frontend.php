<?php

use App\Http\Controllers\Frontend\ArticleController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::name('frontend.')->group(function (){

    Route::group([
        'namespace' => 'Frontend'
    ], function () {

        Route::get('/', [HomeController::class, 'index'])->name('home.index');

        Route::resource('/blog', '\App\Http\Controllers\Frontend\ArticleController');
        Route::get('/blog/{blog}/edit', [ArticleController::class, 'edit'])->name('blog.edit');
        Route::patch('/blog/{blog}',  [ArticleController::class, 'update'])->name('blog.update');
    });
});