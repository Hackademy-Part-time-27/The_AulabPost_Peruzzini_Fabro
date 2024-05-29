<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use Faker\Guesser\Name;

Route::get('/', [PublicController::class, 'homepage']) ->name('homepage');
Route::post('/article/store' , [ArticleController::class , 'store']) -> name ('article.store');
