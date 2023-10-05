<?php

namespace App\Http\Controllers;

use App\Models\SiteInfo;
use Illuminate\Http\Request;

class SiteInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.setting.setting');
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
        foreach($_POST as $k=>$v){
            SiteInfo::updateOrCreate(
            [
                'key'=>$k
            ],[
             'value'=>$k=="phone"?implode(',',$v):$v
            ]);

            
        }

        return back()->with('status','تم التعديل بنجاح');
        return dd(SiteInfo::all());
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SiteInfo $siteInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SiteInfo $siteInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SiteInfo $siteInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SiteInfo $siteInfo)
    {
        //
    }
}
