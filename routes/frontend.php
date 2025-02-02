<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::name('frontend.')->group(function (){

    Route::group([
        'namespace' => 'Frontend'
    ], function () {

        Route::get('/', [HomeController::class, 'index'])->name('home.index');

        Route::resource('/blog', '\App\Http\Controllers\Frontend\ArticleController');
    });
});