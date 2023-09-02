<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoradController extends Controller
{
    //


    function index() {

        return view('backend.pages.dashborad');
    }
}
