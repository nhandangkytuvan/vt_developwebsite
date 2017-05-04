<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Setting;
use App\Online;
use View;
use Session;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){
        View::share('setting',Setting::first());
        View::share('onlines',Online::get());
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(){
        //
    }
}
