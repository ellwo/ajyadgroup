<?php

namespace App\Providers;

use App\Models\City;
use App\Models\Counter;
use App\Models\Question;
use App\Models\SiteInfo;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOTools;
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

        $counters=Cache::remember('counters',3600*60*60,function(){
            return Counter::all();
        });
        $quns=Cache::remember('quns',3600*60*60,function(){
            return Question::all();
        });
        view()->share('cities',$cities);
        view()->share('counters',$counters);
        view()->share('quns',$quns);
        $settings=SiteInfo::all();
        foreach($settings as $setting){

            if( Config::has('sitesetting.'.$setting['key']))
            {
                config("sitesetting.".$setting["key"],$setting["value"]);
               Config::set("sitesetting.".$setting["key"],$setting["value"]);
            }
    //    config("mysetting.".$setting['key'])->set($setting["value"]);
    }            








    SEOMeta::setTitle(Config::get('sitesetting.app_name'));
    SEOMeta::setDescription( strip_tags(Config::get('sitesetting.about_us')));
    SEOMeta::addKeyword(explode(',',Config::get('sitesetting.keywords'))??[]);
    // SEOMeta::addMeta('article:published_time', $post->published_date->toW3CString(), 'property');
 //   SEOMeta::addMeta('article:section', $post->category, 'property');
  //  SEOMeta::addKeyword(['key1', 'key2', 'key3']);
  SEOMeta::setCanonical(request()->getUri());
   OpenGraph::setDescription();
   OpenGraph::setTitle(Config::get('sitesetting.app_name'));
   OpenGraph::setUrl(request()->getUri());
   OpenGraph::addProperty('type', 'articles');

   SEOTools::twitter()->setSite(Config::get('sitesetting.app_name'));
   SEOTools::twitter()->addImage(Config::get('sitesetting.hero_icon'), ['height' => 300, 'width' => 300]);
   SEOTools::twitter()->addImage(Config::get('sitesetting.app_logo'), ['height' => 300, 'width' => 300]);
   SEOTools::setTitle(Config::get('sitesetting.app_name'));
   OpenGraph::addProperty('locale', 'ar');
   OpenGraph::addProperty('locale:alternate', ['ar', 'en-us']);
   //   OpenGraph::addProperty('image', Config::get('sitesetting.hero_icon'));
   OpenGraph::addImage(Config::get('sitesetting.hero_icon'));
   OpenGraph::addImage(Config::get('sitesetting.hero_icon'), ['height' => 300, 'width' => 300]);
   OpenGraph::addImage(Config::get('sitesetting.app_logo'), ['height' => 300, 'width' => 300]);



   JsonLd::setTitle(Config::get('sitesetting.app_name'));
   JsonLd::setDescription( strip_tags(Config::get('sitesetting.about_us')));
   JsonLd::addImage(Config::get('sitesetting.hero_icon'));

    }
}
