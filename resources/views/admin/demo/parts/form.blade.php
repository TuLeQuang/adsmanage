<style>
    .admForm{
        display: none;
        background:#fff;
        padding:15px;
        width:auto;
        position:fixed;
        top:100px;
        left:100px;
        z-index:99999;
    }
    #admselecttype{
        width:180px;
    }
    .admForm div{
        margin:5px 0;
    }
    .admForm  label{
        float:left;
        width:150px;
    }
    .admForm .iplink{
        width:350px;
        border:1px solid #999 !important;
    }
    #admscript{
        display:none;
    }
    .admForm .button{
        padding:2px 15px;
    }
    #adsSelect{
        display: none;
        width: 180px;
    }

</style>
<div class="admForm">
    <div>
        Chọn loại banner
    </div>
    <div class="admstep1">
        <select name="admselecttype" onChange="admchangeType()" id="admselecttype">
            <option value="1">Banner Ảnh hoặc Flash</option>
            <option value="2">Banner Script</option>
        </select>
    </div>
    <div id="admstep2">
            <select name="adsSelect" id="adsSelect" onchange="getAdsScript()">
                @if($adsList)
                    <option selected disabled>Chọn Ads đã có</option>
                    @foreach($adsList as $ads)
                        <option value="{{$ads->id}}">{{$ads->name}}</option>
                    @endforeach
                @else
                    <option selected disabled>Không có ads</option>
                @endif
            </select>
        <div id="admfilebk">
            <label>Landing page</label>
            <input class="iplink" type="text" name="adurl" id="adurl" value="" />
        </div>
        <div id="admscript">
            <label>Nội dung script</label><br />
            <textarea id="adscript" name="adscript" style="width:500px; height:300px;"></textarea>
        </div>
        <div id="admgroupFile">
            <div id="admfile">
                <label>Link file</label>
                <input class="iplink" type="text" name="adfile" id="adfile" value="" />
            </div>
            <div id="">
                <label>Link file Backup</label>
                <input class="iplink" type="text" name="adfilebk" id="adfilebk" value="" />
            </div>
        </div>
    </div>
    <div id="admstep3">
        <input class="button" type="button" value="Bỏ qua" onClick="admhideForm()" />
        <input class="button" type="button" value="Ghi lại" onClick="admSubform()" />
        <input class="button" type="button" value="Xóa" onClick="admdelete()" />
    </div>
</div>