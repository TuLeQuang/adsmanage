<?php

namespace App\Http\Controllers;

use App\User;
use App\Template;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function readItems() {
        $data = User::all ();
        return $data;
    }

    public function getAllTem() {
        return Template::all();
    }

    public function show($id){
        $temData= Template::find($id);
        return view('admin.templates.template_detail',compact('temData'));
    }

    public function index(){
        $templates= Template::paginate(10);
        return view('admin.templates.template_list',compact('templates'));
    }

    public function create(){
        return view('admin.templates.template_add');
    }

    public function store(Request $request){
        $template = new Template;
        $template->data= $request->txtData;
        $template->template= $request->txtTemplate;
        $template->name=$request->txtName;
        $template->user_id=2;
        $template->active=1;
        $template->created_at=Carbon::now('Asia/Ho_Chi_Minh');
        $template->updated_at=Carbon::now('Asia/Ho_Chi_Minh');
        $template->save();
        return redirect()->route('template.index');
    }

    public function destroy($id){
        $template= new Template;
        $template::destroy($id);
        return redirect()->route('template.index');
    }
}
