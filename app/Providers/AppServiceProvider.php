<?php

namespace App\Providers;

use App\Models\City;
use App\Models\SiteInfo;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //


        $cities=Cache::remember('cities',3600*60*60,function(){
            return City::all();
        });

        view()->share('cities',$cities);
        $settings=SiteInfo::all();
        foreach($settings as $setting){

            if( Config::has('sitesetting.'.$setting['key']))
            {
               Config::set("sitesetting.".$setting["key"],$setting["value"]);
            }
    //    config("mysetting.".$setting['key'])->set($setting["value"]);
    }            
    }
}
