<?php

namespace Smartwebsource\Admintoolkit;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;

class AdminToolkitServiceProvider extends ServiceProvider
{
     public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'admin');

        $this->publishes([
            __DIR__.'/resources/views/' => resource_path('views/vendor/admintoolkit'),
            __DIR__.'/public/images/' =>  public_path().'/images',
        ]);

        $this->publishes([
            __DIR__.'/resources/js' => resource_path('js'),
            __DIR__.'/resources/css' => resource_path('css'),
            __DIR__.'/resources/scss' => resource_path('scss'),
        ]);
     }

     public function register(){

     }
}
