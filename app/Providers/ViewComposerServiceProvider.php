<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request;
use UserAuth;
use View;


class ViewComposerServiceProvider extends ServiceProvider
{

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
//        View::composer(
//            'profile', 'App\Http\ViewComposers\ProfileComposer'
//        );

        // Using Closure based composers...
//        View::composer('dashboard', function ($view) {
//            //
//        });

        // 全域的綁定
        View::composer('*', function($view) {
            $User = null;

            if(! UserAuth::guest()){
                $User = UserAuth::findUser();
            }

            $RouteName = Request::route()->getName();

            $view->with("user", $User);
            $view->with("routeName", $RouteName);
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}