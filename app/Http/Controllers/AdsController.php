<?php

namespace App\Http\Controllers;

use App\Ads;
use Illuminate\Http\Request;
use App\Template;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function destroy($id)
    {
        //
    }

    public function cloneAds($adsId,$templateId){
        $temData= Template::find($templateId);
        $adsClone= Ads::find($adsId);
        $adsData=$adsClone->data;
        return view('admin.ads.ads_add',compact(['temData','adsData']));
    }
}
