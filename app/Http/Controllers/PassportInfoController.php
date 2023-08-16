<?php

namespace App\Http\Controllers;

use App\Models\PassportInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PassportInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function search(Request $requset){

        $res=PassportInfo::where('pass_num','=',$requset['pass_num'])
        ->first();


        $resultt=View::make('result',['pass'=>$res,'pass_num'=>$requset['pass_num']]);

        return $data=[
            'resulteView'=>"".$resultt."",
        'state'=>$res!=null,
        'pass_num'=>$requset['pass_num']
    ];

        return  response(['res'=>view('result',['pass'=>$res]) ],200);

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
    public function show(PassportInfo $passportInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PassportInfo $passportInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PassportInfo $passportInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PassportInfo $passportInfo)
    {
        //
    }
}
