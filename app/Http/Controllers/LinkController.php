<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;
use Carbon\Carbon;

class LinkController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $link = new Link();
        $link->ads_id=$request->adsId;
        $link->name=$request->name;
        $link->link=$request->link;
        $link->create_at=Carbon::now('Asia/Ho_Chi_Minh');
        $link->save();
        return redirect()->route('demoIndex')->with('success','Thêm thành công');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $link = Link::find($id);
        $link::destroy($id);
        return with('success','Xóa thành công');

    }
}
