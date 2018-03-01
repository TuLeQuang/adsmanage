<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Template extends Model
{
    protected $table='templates';
    public $timestamps= false;
    public function images()
    {
    	return $this->belongsTo('App\Image','id_Image','id');
    }

    public function getTemplateList()
    {
    	return DB::table('templates')
    		->where('active',1)
    		->get();
    }
}
