<?php

namespace App\Http\Controllers;

use App\Template;
use App\User;

class TemplateController extends Controller {
	public function readItems() {
		$data = User::all();
		return $data;
	}

	public function index() {
		dd(Template::all());
		return Template::all();
	}
	public function getTem($id) {
		$temData = Template::find($id);
		return view('temView', compact('temData'));
	}
	public function getTitle() {
		return view('template_elements.title');
	}
}
