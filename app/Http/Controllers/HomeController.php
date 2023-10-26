<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Company;
use App\Models\Post;
use App\Models\Question;
use App\Models\Service;
use App\Models\ServicePart;
use App\Models\ServicePrice;
use Illuminate\Http\Request;

use Spatie\Feed\Feed;
use Illuminate\Http\Response;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Support\Facades\Config;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOTools;
use Carbon\Carbon;

use Illuminate\Support\Collection;
class HomeController extends Controller
{
    //




    function index() {


                    
                    SEOMeta::setTitle(Config::get('sitesetting.app_name'));
                    SEOMeta::setDescription( strip_tags(Config::get('sitesetting.about_us')));
                // SEOMeta::addMeta('article:published_time', $post->published_date->toW3CString(), 'property');
                //   SEOMeta::addMeta('article:section', $post->category, 'property');
                //  SEOMeta::addKeyword(['key1', 'key2', 'key3']);
                SEOMeta::setCanonical(request()->getUri());
                OpenGraph::setDescription( strip_tags(Config::get('sitesetting.about_us')));
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
                JsonLd::setDescription( strip_tags(Config::get('sitesetting.about_us')));
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


    public function sitemap()
    {


                $sitemap= Sitemap::create()
                ->add(Url::create('/home')->setPriority(1.0)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setLastModificationDate( Carbon::today()) )
                ->add(Url::create('/about-us')->setPriority(0.8)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setLastModificationDate( Carbon::today()) )
                ->add(Url::create('/address')->setPriority(0.7)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setLastModificationDate( Carbon::today()) )
                ->add(Url::create('/pass.search.get')->setPriority(0.9)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setLastModificationDate( Carbon::today()) )
                ->add(Url::create('/contact')->setPriority(0.7)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setLastModificationDate( Carbon::today()) );

                $services=Service::all()->each(function($ser)use($sitemap){
                    $sitemap->add(Url::create("/service/{$ser->id}")
                    ->setPriority(0.8)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                    ->setLastModificationDate( Carbon::today()));
                });
                $services=ServicePrice::all()->each(function($ser)use($sitemap){
                // $ser->note=e($ser->note);
                    $sitemap->add(Url::create("/service_price/$ser->id")
                    ->setPriority(0.8)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                    ->setLastModificationDate( Carbon::today()));
                });
                Post::all()->each(function($p)use($sitemap){
                    $sitemap->add(Url::create("/post/$p->id")->setPriority(0.8)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                    ->setLastModificationDate( Carbon::today()));
                });
                Question::all()->each(function($q)use($sitemap){
                    $sitemap->add(Url::create("/about-us#quns$q->id")->setPriority(0.8)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                    ->setLastModificationDate( Carbon::today()));
                });
                Address::all()->each(function($q)use($sitemap){
                    $sitemap->add(Url::create("/address/$q->name")  ->setPriority(0.8)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                    ->setLastModificationDate( Carbon::today()));
                });

                    $sitemap->writeToFile(public_path('sitemap.xml'));
                    return $sitemap;
        # code...
    }


    public function feed()
    {


        $items = new Collection();


        Service::all()->each(function($ser)use($items){
           
            $fitem=$ser->toFeedItem();
           // $fitem->category("ss");
           

            $items->push($fitem);

       
        });
       
        ServicePrice::all()->each(function($ser2)use($items){
            $items->push($ser2->toFeedItem());
        });
        $posts = Post::latest()->limit(80)->get();
        foreach ($posts as $post) {
      
            //return dd($posts);
            $items[]=$post->toFeedItem();
            //    $feed->add($post->titel, $post->author, $post->created_at, $post->content);
        }

        // $services = Service::latest()->limit(40)->get();
        // foreach ($services as $service) {
        //     // Customize the feed item attributes based on your Service model
        //     $feed->add($service->titel, $service->author, $service->created_at, $service->note);
        // }

        // Add more models (ServicePrice, Address) to the feed as needed

    $feed = new Feed(
        Config::get('sitesetting.app_name'), // Feed type (rss or atom)
        $items,
        env('APP_URL',config('app.url')),
        'feed::rss',
        Config::get('sitesetting.about_us'),
        'ar',
        Config::get('sitesetting.app_logo'),
        'atom'
         // Base URL of your website
    )  ;
    
    return $feed->toResponse(request());
    return $response;

        // $feedXml = $feed->render('rss');

        // $headers = [
        //     'Content-Type' => 'application/rss+xml; charset=utf-8',
        // ];

        // return Response::make($feedXml, 200, $headers);
    
        # code...
    }
}
