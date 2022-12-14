<?php

namespace App\Providers;

use App\Models\Admin\Home;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*$this->app->bind('path.public',function(){
            return'/u842821089/domains/mned.online/public_html';
        });*/

        if(env('APP_ENV') !== 'local') {
            URL::forceScheme('https');
        }

        /*$this->app->bind('path.public',function(){
            return'/home/ibmcloudrocks/public_html';
        });*/

        Paginator::useBootstrap();
        
        view()->composer('web.partials.footer',function($view){
            //$view->with('home', Home::findOrFail(1));
        });
    }
}
