<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Spatie\Feed\FeedItem;

class ServicePrice extends Model
{
    use HasFactory;
    protected $fillable=[
        'titel','img','note',
        'price',
        'active',
        'service_id'
    ];


    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function toFeedItem(): FeedItem
    {
        return FeedItem::create()
            ->id($this->id)
            ->title($this->titel??"")
            ->summary($this->note??"")
            ->updated(Carbon::today())
            ->link(route('service_price.show',$this->id))
            ->authorName(Config::get('sitesetting.app_name'))
            ->authorEmail(Config::get('sitesetting.email'))
            ->category($this->service->titel);
    }
}
