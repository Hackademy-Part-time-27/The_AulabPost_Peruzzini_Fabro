<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use Faker\Guesser\Name;

Route::get('/', [PublicController::class, 'homepage']) ->name('homepage');
Route::post('/article/store' , [ArticleController::class , 'store']) -> name ('article.store');
<<<<<<< HEAD
=======
Route::get('/article/create' , [ArticleController::class , 'create']) -> name ('article.create');
Route::get('/article/index' , [ArticleController::class , 'index']) ->name ('article.index');
>>>>>>> fec940421a982e17281e6bb3a0f13432d86bfa83
