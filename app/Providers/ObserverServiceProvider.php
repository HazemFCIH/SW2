<?php

namespace App\Providers;
use App\movie;
use App\Observers\MoiveObserver;
use Illuminate\Support\ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Movie::observe(MoiveObserver::class);
    }
}
