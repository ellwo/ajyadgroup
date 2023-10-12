<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServicePrice;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Support\Facades\Config;
use Artesaos\SEOTools\Facades\JsonLd;

use Artesaos\SEOTools\Facades\SEOTools;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $services=Service::paginate(10);
        return view('pages.services.index',['services'=>$services]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {

     

    //     SEOMeta::setTitle($service->titel);
    //     SEOMeta::setDescription($service->note);
    //    // SEOMeta::addMeta('article:published_time', $post->published_date->toW3CString(), 'property');
    //  //   SEOMeta::addMeta('article:section', $post->category, 'property');
    //   //  SEOMeta::addKeyword(['key1', 'key2', 'key3']);
    //   SEOMeta::setCanonical(request()->getUri());
    //    OpenGraph::setDescription();
    //    OpenGraph::setTitle($service->titel);
    //    OpenGraph::setUrl(request()->getUri());
    //    OpenGraph::addProperty('type', 'articles');
   
   
    //    OpenGraph::addProperty('locale', 'ar');
    //    OpenGraph::addProperty('locale:alternate', ['ar', 'en-us']);
    //    //   OpenGraph::addProperty('image', Config::get('sitesetting.hero_icon'));
    //    OpenGraph::addImage(Config::get('sitesetting.hero_icon'));
    //    OpenGraph::addImage(Config::get('sitesetting.hero_icon'), ['height' => 300, 'width' => 300]);
    //    OpenGraph::addImage(Config::get('sitesetting.app_logo'), ['height' => 300, 'width' => 300]);



    //    JsonLd::setTitle(Config::get('sitesetting.app_name'));
    //    JsonLd::setDescription(Config::get('sitesetting.about_us'));
    //    JsonLd::setType('Article');
    //    JsonLd::addImage(Config::get('sitesetting.hero_icon'));
    $service_part=$_GET['service_part']??$service->service_parts->first()?->id;
    

    $p=ServicePrice::find($service_part);
       //SEOTools::setTitle($service->titel);
       SEOTools::setTitle(SEOTools::getTitle()."-".$service->titel);
       
       SEOTools::setDescription(strip_tags($service->note));
       
       SEOTools::opengraph()->setUrl(request()->getUri());
       SEOTools::opengraph()->setDescription(strip_tags($service->note).strip_tags($p?->note));
       SEOTools::setCanonical(request()->getUri());
       SEOTools::opengraph()->addProperty('type', 'articles');
     
       SEOTools::twitter()->setSite($service->titel);
      // SEOTools::twitter()->setcard($service->titel);

       SEOTools::jsonLd()->setDescription(strip_tags($service->note));
       SEOTools::jsonLd()->setTitle(Config::get('sitesetting.app_name'));
    //   

    $services=Service::where('id','!=',$service->id)->get();
     
        //  return dd($service->service_parts);
        return view('pages.services.show',['service'=>$service,
    'service_part'=>$service_part,
'services'=>$services]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
