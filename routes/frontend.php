<?php

use App\Http\Controllers\Frontend\ArticleController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::name('frontend.')->group(function (){

    // Group function Frontend
    Route::group([
        'namespace' => 'Frontend'
    ], function () {

        Route::get('/', [HomeController::class, 'index'])->name('home.index');

        Route::resource('/blog', '\App\Http\Controllers\Frontend\ArticleController')->middleware('auth');
        Route::get('/blog/delete/{blog}', [ArticleController::class, 'destroy'])->name('blog.delete');
    });
});