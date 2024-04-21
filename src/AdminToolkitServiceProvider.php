<?php

namespace Smartwebsource\Admintoolkit;

use Illuminate\Support\ServiceProvider;

class AdminToolkitServiceProvider extends ServiceProvider
{
     public function boot(){
        // $path = base_path();

        // $package_destination = $path . '/package.json';
        // $package_source = __DIR__.'/resources/js-config/package.json';


        // $vite_destination = $path . '/vite.config.js';
        // $vite_source = __DIR__.'/resources/js-config/vite.config.js';

        // $tailwind_config_destination = $path . '/tailwind.config.js';
        // $tailwind_config_source = __DIR__.'/resources/js-config/tailwind.config.js';

        // if (file_exists($package_source)) {
        //     copy($package_source, $package_destination);
        // }

        // if (file_exists($vite_source)) {
        //     copy($vite_source, $vite_destination);
        // }

        // if (file_exists($tailwind_config_source)) {
        //     copy($tailwind_config_source, $tailwind_config_destination);
        // }

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'admin');

        $this->publishes([
            __DIR__.'/resources/views/' => resource_path('views/vendor/admintoolkit'),
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
