<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table="images";
    public function template()
    {
    	return $this->hasMany('App\Template','id_Image','id');
    }
}
