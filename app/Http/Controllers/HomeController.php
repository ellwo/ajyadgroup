<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Post;
use App\Models\Service;
use App\Models\ServicePart;
use App\Models\ServicePrice;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Support\Facades\Config;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOTools;
class HomeController extends Controller
{
    //




    function index() {


        SEOMeta::setTitle(Config::get('sitesetting.app_name'));
        SEOMeta::setDescription(Config::get('sitesetting.about_us'));
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

       OpenGraph::addProperty('locale', 'ar');
       OpenGraph::addProperty('locale:alternate', ['ar', 'en-us']);
       //   OpenGraph::addProperty('image', Config::get('sitesetting.hero_icon'));
       OpenGraph::addImage(Config::get('sitesetting.hero_icon'));
       OpenGraph::addImage(Config::get('sitesetting.hero_icon'), ['height' => 300, 'width' => 300]);
       OpenGraph::addImage(Config::get('sitesetting.app_logo'), ['height' => 300, 'width' => 300]);



       JsonLd::setTitle(Config::get('sitesetting.app_name'));
       JsonLd::setDescription(Config::get('sitesetting.about_us'));
       JsonLd::addImage(Config::get('sitesetting.hero_icon'));

       // OR with multi

       //   TwitterCard::setTitle('Homepage');
    //   TwitterCard::setSite('@LuizVinicius73');
    //   SEOMeta::setCanonical('https://codecasts.com.br/lesson');

    //   OpenGraph::setDescription('This is my page description');
    //   OpenGraph::setTitle('Home');
    //   OpenGraph::setUrl('http://current.url.com');
    //   OpenGraph::addProperty('type', 'articles');

    //   TwitterCard::setTitle('Homepage');
    //   TwitterCard::setSite('@LuizVinicius73');


        $resntPost=Post::orderBy('updated_at','desc')->take(3)->get();

        $services=Service::all();

        $companies=Company::all();
        $service_prices=ServicePrice::all();


        return view('pages.index',[
            'services'=>$services,
            'posts'=>$resntPost,
            'companies'=>$companies,
            'service_prices'=>$service_prices
        ]);
    }
}
