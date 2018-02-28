<?php

namespace App\Http\Controllers;

use App\Ads;
use Illuminate\Http\Request;
use App\Template;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

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
        echo "them tanh cong cmnr";
        //return redirect()->route('ads.index');
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
        $adsTemplate=Template::find($adsData->templates_id);
        return view('admin.ads.ads_edit',compact(['adsData','adsTemplate']));
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
        $ads->data= $request->txtAdsData;
        $ads->name=$request->txtAdsName;
        $ads->brand=$request->txtAdsBrand;
        $ads->updated_at=Carbon::now('Asia/Ho_Chi_Minh');
        $ads->save();
        echo "sua thanh cong cmnr";
        //return redirect()->route('ads.index');
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
}
