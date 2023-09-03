<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //




    function index() {




        $resntPost=Post::orderBy('updated_at','desc')->take(3)->get();

        $services=Service::all();

        $companies=Company::all();


        return view('pages.index',[
            'services'=>$services,
            'posts'=>$resntPost,
            'companies'=>$companies
        ]);
    }
}
