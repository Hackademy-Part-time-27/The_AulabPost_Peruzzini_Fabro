<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void

    {
        if (Schema::hasTable('categories')){
            $categories = Category::all();
            View::share(['categories' => $categories]);
        }
<<<<<<< HEAD
    }
 
    
=======
    }    
>>>>>>> fec940421a982e17281e6bb3a0f13432d86bfa83
}
