<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
   /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       include __DIR__ . '/../Http/macros.php';
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        require_once __DIR__ . '/../Http/myFunctions.php';      
        
    }
}
