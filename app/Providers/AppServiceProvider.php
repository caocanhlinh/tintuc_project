<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\notifications;

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
        $noti=notifications::orderBy('id','DESC')->get();
        view()->share('noti',$noti);
    }
}
