<?php

namespace App\Providers;

<<<<<<< HEAD
=======
use App\Repository\PostRepository;
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
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
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
<<<<<<< HEAD
              $this->app->singleton('\App\Repositories', PostRepository::class);
=======
        $this->app->singleton('\App\Repositories', PostRepository::class);
        
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
    }
}
