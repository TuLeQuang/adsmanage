<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getElement()
    {
    	return view('pages.tem_element');
    }
}
