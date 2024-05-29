<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use Faker\Guesser\Name;

Route::get('/', [PublicController::class, 'homepage']) ->name('homepage');
<<<<<<< HEAD
Route::post('/article/store' , [ArticleController::class , 'store']) -> name ('article.store');
=======

Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
>>>>>>> 5a985a5501f7e0dc2e4e396a0a20e4ce0477d9fc
