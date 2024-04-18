<?php

namespace Smartwebsource\Admintoolkit;

use Illuminate\Support\ServiceProvider;

class AdminToolkitServiceProvider extends ServiceProvider
{
     public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'admin');

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/admintoolkit'),
        ]);

        $this->publishes([
            __DIR__.'/resources/js' => resource_path('resources/js'),
            __DIR__.'/resources/css' => resource_path('resources/css'),
            __DIR__.'/resources/scss' => resource_path('resources/scss'),
        ]);
     }

     public function register(){

     }
}
