<?php

namespace App\Http\Controllers;

use App\User;
use App\Template;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function readItems() {
        $data = User::all();
        return $data;
    }

    public function getAllTem() {
        return Template::all();
    }
    public function show($id){
        $temData= Template::find($id);
        return view('temView',compact('temData'));
    }

    public function index(){
        return view('template_elements.items');
    }

    public function store(Request $request){
        $template = new Template;
        $template->data= $request->txtData;
        $template->template= $request->txtTemplate;
        $template->name=$request->txtName;
        $template->user_id=2;
        $template->created_at=Carbon::now('Asia/Ho_Chi_Minh');
        $template->updated_at=Carbon::now('Asia/Ho_Chi_Minh');
        $template->save();
        echo "them thanh cong";
    }
}
