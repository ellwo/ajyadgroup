<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //



        $services=Service::all();
        return view('backend.pages.services.index',[
            'services'=>$services
        ]);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('backend.pages.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'titel'=>['required'],
            'img'=>['required'],
        ]);

        Service::create(
            [
                'titel'=>$request['titel'],
                'img'=>$request['img'],
                'note'=>$request['note']
            ]
            );

            return redirect()->route('services')->with('status','تم تعديل الخدمة ينجاح ');

    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {

        return view('pages.services.show',['service'=>$service]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('backend.pages.services.edit',[
            'service'=>$service
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $this->validate($request,[
            'titel'=>['required'],
            'img'=>['required'],
        ]);

        $service->update(
            [
                'titel'=>$request['titel'],
                'img'=>$request['img'],
                'note'=>$request['note']
            ]
            );

            return redirect()->route('services')->with('status','تم تعديل الخدمة ينجاح ');
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
