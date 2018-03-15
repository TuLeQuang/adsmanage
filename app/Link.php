<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Link extends Model
{
    protected $table='link';
    public $timestamps=false;

    public function getLink($adsId){
       return $link=DB::table('link')
                ->join('ads','link.ads_id','=','ads.id')
                ->select('ads.id as adsId','link.id as linkId','site','link.name as linkName','link','link.create_at')
                ->where('ads.id',$adsId)
                ->get();
    }
}
