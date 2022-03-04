<?php

namespace KhaledShaaban\Calculator;

use Illuminate\Support\ServiceProvider as SupportServiceProvider;
use KhaledShaaban\Calculator\Calculator;

class ServiceProvider extends SupportServiceProvider
{

    public function boot()
    {
        
    }

    public function register()
    {
        $this->app->bind('calculator', function($app) {
            return new Calculator();
        });
    }
}