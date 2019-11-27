<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Resources\Json\Resource;




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
        Resource::withoutWrapping();
        // $townships=Township::all();
        // View::share('townships',$townships);
        // $housetypes=Type::all();
        // View::share('housetypes',$housetypes);
    }
}
