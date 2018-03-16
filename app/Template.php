<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Template extends Model
{
    protected $table='templates';
    public $timestamps= false;

    public function getTemplateListAdd()
    {
    	return DB::table('templates')
            ->where('templates.active',1)
            ->orderBy('templates.id','desc')
    		->get();
    }

    public function templateList(){
        return DB::table('templates')
            ->join('users','users.id','=','templates.user_id')
            ->select('users.name as userName','templates.name as templateName','templates.created_at as templateCreate','templates.updated_at as templateUpdate','templates.id as templateId','users.id as userId','templates.active as templateActive')
            ->orderBy('templates.id','desc')
            ->get();
    }
}
