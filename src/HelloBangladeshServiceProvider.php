<?php

namespace Islam2718\HelloBangladesh;

use Illuminate\Support\ServiceProvider;

class HelloBangladeshServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Register the routes
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }

    public function register()
    {
        // Register any bindings here
    }
}
