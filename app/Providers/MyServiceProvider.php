<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Township;
use Illuminate\Support\Facades\View;
use App\Type;

class MyServiceProvider extends ServiceProvider
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
        //
        $townships=Township::all();
        View::share('townships',$townships);
        $housetypes=Type::all();
        View::share('housetypes',$housetypes);
    }
}
