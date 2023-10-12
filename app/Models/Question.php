<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;

class Question extends Model 
// implements Feedable
{
    use HasFactory;
    protected $fillable=[
        'qu','an'
    ];

    public function toFeedItem(): FeedItem
    {
        return FeedItem::create()
            ->id($this->id)
            ->title($this->qu)
            ->summary($this->an)
            ->updated(Carbon::today())
            ->link(route('about-us#quns'.$this->id))
            ->authorName(Config::get('sitesetting.app_name'))
            ->authorEmail(Config::get('sitesetting.email'))
            ->category("الاسئلة الشائعة");
    }
 
}
