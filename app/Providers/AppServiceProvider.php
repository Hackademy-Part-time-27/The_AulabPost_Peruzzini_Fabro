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
    }
 
    
<<<<<<< HEAD
=======
        
>>>>>>> 5a985a5501f7e0dc2e4e396a0a20e4ce0477d9fc
}
