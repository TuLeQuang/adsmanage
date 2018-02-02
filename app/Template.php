<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $table='templates';
    public $timestamps= false;
    public function images()
    {
    	return $this->belongsTo('App\Image','id_Image','id');
    }
}
