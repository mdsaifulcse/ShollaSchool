<?php

namespace App\Providers;

use App\Contact_us;
use function foo\func;
use App\Notice;
use DB;

use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            [
                'front.home.home-content',
                'front.includes.notices',
            ],
            function ($view) {
            $view->with('publishedNotices', $publishedNotices=Notice::where('published_status',1)->orderBy('id','desc')->take(8)->get() );
        });

        View::composer(
            [
                'front.contact-us.contact-us',
                'front.includes.footer'
            ],
            function ($view){
                $view->with('contactInfo', $contactInfo=Contact_us::all()->first());
            });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
