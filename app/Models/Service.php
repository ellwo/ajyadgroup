<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Spatie\Feed\FeedItem;

class Service extends Model
{
    use HasFactory;
    protected $fillable=[
        'titel','img','note'
    ];



   public function service_parts(){

        return $this->hasMany(ServicePrice::class);

    }

    function service_prices() {

        return $this->hasMany(ServicePrice::class);

    }

    public function toFeedItem(): FeedItem
    {
        // return FeedItem::create()
        //     ->id($this->id)
        //     ->title($this->titel)
        //     ->summary($this->note??"")
        //     ->updated(Carbon::today())
        //     ->link(route('service.show',$this->id))
        //     ->authorName(Config::get('sitesetting.app_name'))
        //     ->authorEmail(Config::get('sitesetting.email'))
        //     ->category(Config::get('sitesetting.app_name')." - "."خدماتنا");
           
            return FeedItem::create([
                'id' => $this->id,
                'title' => $this->titel,
                'summary' => ($this->note??"")."</br>".$this->toUl(),
                'updated' => $this->updated_at,
                'link' => route('service.show',$this->id),
                'authorName' => Config::get('sitesetting.app_name'),
                'category'=>$this->service_prices->pluck('titel')->toArray()
            ]);
        }
        public function toUl()
        {

            $lis="<ul>";
            foreach($this->service_prices as $p){

                $lis.="<li><a href='".route('service_price.show',$p->id)."'>{$p->titel} </a> </li>";
           //$lis.=$p->toFeedItem()->title();
            }
            $lis.="</ul>";
            return $lis;
            # code...
        }

}
