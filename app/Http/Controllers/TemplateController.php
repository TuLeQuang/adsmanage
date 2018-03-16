<?php

namespace App\Http\Controllers;
use App\Image;
use App\User;
use DB;
use App\Template;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class TemplateController extends Controller
{
    public function getTemplate($id){
        $template=Template::find($id)->template;
        return $template;
    }

    public function show($id){
        $temData= Template::find($id);
        return view('admin.templates.template_detail',compact('temData'));
    }

    public function index(){
        //$templates= Template::orderBy('id', 'desc');
        $tem= new Template();
        $templates= $tem->templateList();
        return view('admin.templates.template_list',compact('templates'));
    }
 
    public function create(){
        return view('admin.templates.template_add');
    }
    public function store(Request $request){
        $this->validate($request,
            [
                'txtName' => 'required|unique:templates,name',
            ],
            [
                'txtName.required'=>'Bạn chưa nhập tên templates',
                'txtName.unique'=>'Tên templates đã tồn tại hãy chọn tên khác',
            ]);
        $template = new Template;
        $template->data= $request->txtData;
        $template->template= $request->txtTemplate;
        $template->config=$request->txtConfig;
        $template->name=$request->txtName;
        $template->user_id=Auth::user()->id;
        $template->active=0;
        $template->created_at=Carbon::now('Asia/Ho_Chi_Minh');
        $template->updated_at=Carbon::now('Asia/Ho_Chi_Minh');
        $template->save();
        return redirect()->route('template.index');
    }
    // active and un-active
    public function getActive(Request $request,$id)
    {
        $templates=Template::find($id);
        if(Auth::user()->level!=1 && ($templates['level'] == 1 || ($templates['level']!=1 && (Auth::user()->id!=$id))) ||(Auth::user()->level==1 && $templates['level']==1 &&(Auth::user()->id!=$id)))
        {
            return redirect('admin/template')->with('error','Bạn chỉ có thể xem trạng thái của template'); 
        }
        if($templates->active==1)
            {$templates->active=0;}
        else
            $templates->active=1;
        $templates->save();
        return redirect('admin/template');

    }
    public function destroy($id){
        $template=Template::find($id);
        $template::destroy($id);
        return redirect()->route('template.index')->with('success','Xóa template thành công');
    }

    public function getImport(){
        return view('admin.templates.template_import');
    }
}
