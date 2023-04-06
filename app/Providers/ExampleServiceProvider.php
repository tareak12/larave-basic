<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ExampleServiceProvider extends ServiceProvider
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
        // $data=database thake data anlam,
        $data=array();
        $data['a']=50;
        $data['b']=100;
        $data['c']=200;
        view()->share('number',$data);

    }
}
