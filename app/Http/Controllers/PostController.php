<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Config;

use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $posts=Post::orderBy('created_at','desc')->paginate(10);

        return view('pages.posts.index',['posts'=>$posts]);
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
    public function show(Post $post)
    {
        $r_posts=Post::where('id','!=',$post->id)->orderBy('id','desc')->take(3)->get();
        //
     
        SEOTools::setTitle(SEOTools::getTitle()."-".$post->titel);
        SEOTools::setDescription($post->content);
        
        SEOTools::opengraph()->setUrl(request()->getUri());
        SEOTools::opengraph()->setDescription($post->content);
        SEOTools::setCanonical(request()->getUri());
        SEOTools::opengraph()->addProperty('type', 'articles');
      
        SEOTools::twitter()->setSite(request()->getUri());
        SEOTools::twitter()->addImage(Config::get('sitesetting.app_logo'), ['height' => 300, 'width' => 300]);
        SEOTools::twitter()->addImage($post->img, ['height' => 600, 'width' => 600]);
        $post->content=str_replace('&nbsp;','',$post->content);
        $p=explode(' ',$post->content);

        SEOMeta::addKeyword(implode(',',$p));
 
        SEOTools::jsonLd()->setDescription($post->content);
        SEOTools::jsonLd()->setTitle(Config::get('sitesetting.app_name'));
        SEOTools::jsonLd()->addImage($post->img);
        SEOTools::opengraph()->addImage($post->img);
       
        return view('pages.posts.show',['post'=>$post,'r_posts'=>$r_posts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
