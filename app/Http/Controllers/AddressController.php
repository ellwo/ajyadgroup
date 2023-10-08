<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Config;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        SEOTools::setTitle("فروعنا ");
        SEOTools::setDescription("فروع مجموعة اجياد في جميع المحافضات اليمنية ");
        
        SEOTools::opengraph()->setUrl(request()->getUri());
        SEOTools::opengraph()->setDescription("فروع مجموعة اجياد في جميع المحافضات اليمنية ");
        SEOTools::setCanonical(request()->getUri());
        SEOTools::opengraph()->addProperty('type', 'articles');
      
        SEOTools::twitter()->setSite("فروعنا ");
 
        SEOTools::jsonLd()->setDescription("فروع مجموعة اجياد في جميع المحافضات اليمنية ");
        SEOTools::jsonLd()->setTitle(Config::get('sitesetting.app_name'));
    

        return view('pages.addresses.index');
        //
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
    public function show(Address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Address $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        //
    }
}
