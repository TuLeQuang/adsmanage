<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Ads extends Model
{
    protected $table='ads';
    public $timestamps=false;

    public function getAdsInfo()
    {
    	return DB::table('ads')
    		->join('users', 'ads.users_id', '=', 'users.id')
    		->join('templates', 'ads.templates_id', '=', 'templates.id')
    		->select('users.name as userName','templates.name as templateName','ads.name as adsName','ads.id as adsId','ads.brand','ads.created_at','ads.updated_at','users.id as userId','templates.id as templatesId','ads.users_id as adsUserId','ads.templates_Id as adstemplatesId','templates.active')
    		->orderBy('ads.id','decs')
            ->get();
    }
}

