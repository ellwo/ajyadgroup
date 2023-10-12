<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Spatie\Feed\Feed;
use App\Models\Post;
use App\Models\Service;
use App\Models\ServicePrice;
use App\Models\Address;

class FeedController extends Controller
{
    public function index()
    {
        $feed = new Feed();

        $posts = Post::latest()->limit(80)->get();
        foreach ($posts as $post) {
            $feed->add($post->title, $post->author, $post->published_at, $post->content);
        }

        $services = Service::latest()->limit(40)->get();
        foreach ($services as $service) {
            // Customize the feed item attributes based on your Service model
            $feed->add($service->titel, $service->author, $service->created_at, $service->description);
        }

        // Add more models (ServicePrice, Address) to the feed as needed

        $feedXml = $feed->render('rss');

        $headers = [
            'Content-Type' => 'application/rss+xml; charset=utf-8',
        ];

        return Response::make($feedXml, 200, $headers);
    }
}