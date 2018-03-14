<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use App\Template;
use App\Ads;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\Response;
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
/*    public function show($id)
    {
    	$ads=Ads::find($id);
    	return $ads;
    }*/

    public function destroy($id){
        $ads=Ads::find($id);
        if(Auth::user()->level!=1 && ($ads[' '] == 1 || ($ads['level']!=1 && (Auth::user()->id!=$id))) ||(Auth::user()->level==1 && $ads['level']==1 &&(Auth::user()->id!=$id)))
        {
            return redirect('admin/ads')->with('error','Bạn không thể xóa mục này'); 
        }
        $ads::destroy($id);
        return redirect('admin/ads')->with('success','Xóa thành công');
    } 

    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'txtAdsName' => 'required|unique:ads,name',
            ],
            [
                'txtAdsName.required'=>'Bạn chưa nhập tên quảng cáo',
                'txtAdsName.unique'=>'Tên quảng cáo đã tồn tại hãy chọn tên khác',
            ]);
        $ads = new Ads;
        $ads->data= $request->txtAdsData;
        $ads->name=$request->txtAdsName;
        $ads->users_id=Auth::user()->id;
        $ads->templates_id=$request->txtTemplateId;
        $ads->brand=$request->txtAdsBrand;
        $ads->created_at=Carbon::now('Asia/Ho_Chi_Minh');
        $ads->updated_at=Carbon::now('Asia/Ho_Chi_Minh');
        $ads->save();
        return redirect()->route('ads.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $temData= Template::find($id);
        return view('admin.ads.ads_add',compact('temData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adsData= Ads::find($id);
        $template=Template::find($adsData->templates_id);
        return view('admin.ads.ads_edit',compact(['adsData','template']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ads = Ads::find($id);

        $adsNames=DB::table('ads')->select('name')->where('id','<>',$id)->get();
        foreach ($adsNames as $adsName){
            if($request->txtAdsName==$adsName->name){
                return redirect()->route('ads.edit',$id)->with('error','Tên quảng cáo đã tồn tại');
            }
        }

        $ads->data= $request->txtAdsData;
        $ads->name=$request->txtAdsName;
        $ads->brand=$request->txtAdsBrand;
        $ads->updated_at=Carbon::now('Asia/Ho_Chi_Minh');
        $ads->save();
        return redirect()->route('ads.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function cloneAds($adsId,$templateId){
        $temData= Template::find($templateId);
        $adsClone= Ads::find($adsId);
        $adsData=$adsClone->data;
        return view('admin.ads.ads_add',compact(['temData','adsData']));
    }

    public function adsDemo(Request $request){
        return $request->all();
    }

    public function getAdsScript($id){
        $ads= Ads::find($id);
        $template=Template::find($ads->templates_id);
        return $template->template;
    }
}
