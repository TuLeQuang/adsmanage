<?php

namespace App\Http\Controllers;

use App\User;
use App\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function readItems() {
        $data = User::all ();
        return $data;
    }

    public function index() {
        dd(Template::all());
        return Template::all();
    }
    public function getTem($id){
        $temData= Template::find($id);
        return view('temView',compact('temData'));
    }
    public function test()
    {
        return view('template_elements.logo');
    }
}
