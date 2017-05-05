<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Setting;
use App\Online;
use App\Log;
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
        View::share('logs',Log::limit(10)->get());
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
