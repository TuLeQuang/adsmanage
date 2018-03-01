<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use App\Template;
use App\Ads;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class AdsController extends Controller
{
    public function index(){
        $ads=new Ads();
        $adsData=$ads->getAdsInfo();
        $template= new Template();
        $templateData=$template->getTemplateList();

        // dd($adsData);
        return view('admin.ads.ads_list',compact(['adsData','templateData']));
    }
    public function show($id)
    {
    	$ads=Ads::find($id);
    	return $ads;
    }
    public function destroy($id){
        $ads=Ads::find($id);
        if(Auth::user()->level!=1 && ($ads[' '] == 1 || ($ads['level']!=1 && (Auth::user()->id!=$id))) ||(Auth::user()->level==1 && $ads['level']==1 &&(Auth::user()->id!=$id)))
        {
            return redirect('admin/ads')->with('error','Bạn không thể xóa mục này'); 
        }
        $ads::destroy($id);
        return redirect('admin/ads')->with('success','Xóa thành công');
    } 
}
