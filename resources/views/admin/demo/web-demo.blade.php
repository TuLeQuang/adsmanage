<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>create demo Adx</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src=" {{asset('js/angular.min.js')}}"></script>
    <style>
        #choseLayout{
            position:fixed;
            top:5px;
            left:10px;
            background:#fff;
            padding:10px;
            width:auto;
            clear:both;
            z-index:99999;
        }
        .adzone1{
            width:980px;
            margin: 10px auto;
        }
        #choseLayout input{
            padding:5px;
            background:#960;
            color:#fff;
            font-weight:bold;
        }
        body{margin:0; padding:0;}
        .ban980x90{
            position:relative;
            width:980px;
            height:90px;
            border:1px solid #999;
            margin:0 auto;
        }
        .ban336x600{
            position:relative;
            width:336px;
            height:600px;
            border:1px solid #999;
            margin:0 auto;
        }
        .ban728x90{
            position:relative;
            width:728px;
            height:90px;
            border:1px solid #999;
            margin:0 auto;
        }
        .ban300x250{
            position:relative;
            width:300px;
            height:250px;
            border:1px solid #999;
            margin:0 auto;
        }
        .ban474x90{
            position:relative;
            width:474px;
            height:90px;
            border:1px solid #999;
            margin:0 auto;
        }
        .ban300x600{
            position:relative;
            width:300px;
            height:600px;
            border:1px solid #999;
            margin:0 auto;
        }
        .ban160x600{
            position:relative;
            width:160px;
            height:600px;
            border:1px solid #999;
            margin:0 auto;
        }
        .ban470x200{
            position:relative;
            width:470px;
            height:200px;
            border:1px solid #999;
            margin:0 auto;
        }
        .ban620x200{
            position:relative;
            width:620px;
            height:200px;
            border:1px solid #999;
            margin:0 auto;
        }
        .setting{
            position:absolute;
            top:2px;
            right:2px;
        }
        .setting img{
            width:30px !important;
            height:30px !important;
        }
        #admoverlay{
            background:#000;
            opacity:0.3;
            width:100%;
            height:100%;
            position:fixed;
            top:0;
            left:0;
            z-index:9999;
            display:none;
        }
        .exportLink{
            position:fixed;
            top:5px;
            right:5px;
            z-index:99999;
        }
        .exportLink input{
            padding:5px 10px;
            background:#F60;
            font-size:16px;
            font-weight:bold;
            color:#fff;
        }
        .iplink{
            border:1px solid #999 !important;
        }
    </style>
</head>
<body>
<div id="allcontent">
</div>
<div id="admoverlay"></div>
<div id="choseLayout">
    <label>Chọn template làm demo</label>
    <select id="chosetemp">
        <?php
        foreach($arrTemplate as $k=>$v){
            echo '<option value="'.$k.'">'.$v['title'].'</option>';
        }
        ?>
    </select>
    <?php echo csrf_field() ?>
    <input type="button" onClick="choseTemplate($('#chosetemp').val())" value="Chọn Mẫu giao diện" />
    <input type="button" id="admshowInput" onClick="choseTemplateInput()" style="display:none;" value="Hiển thị vị trí nhập" />
    <br />
    <div id="urlexport">
    </div>
</div>
<div id="adminputShow">
</div>
<script>
    <?php echo 'var arrDefine= '.json_encode($arrDefined);?>;
   <?php echo  'var arradmTemp='.json_encode($arrTemplate);?>;
    var dmchose='dantri';
    var arrDataInput={},admZone;
    function admchangeType(){
        var sel=$('#admselecttype').val();
        if(sel==1){
            $('#admscript').hide();
            $('#admgroupFile').show();
        }else{
            $('#admgroupFile').hide();
            $('#admscript').show();
        }
        $('.admForm').css({'top':($(window).height()/2-$('.admForm').height()/2)+'px','left':($(window).width()/2-$('.admForm').width()/2)+'px'});
    }
    function admhideForm(){
        $('#admoverlay').hide();
        $('#adminputShow').html('');
    }
    function admdelete(){
        arrDataInput[admZone]={};
        var arr={};
        for(var i in arrDataInput){
            if(i!=admZone){
                arr[i]=arrDataInput[i];
            }
        }
        arrDataInput=arr;
        $('#admzone_ban'+admZone).html('');
    }
    function exportLink(){
        var chk=false;
        for( var i in arrDataInput){
            chk=true;
            break;
        }
        if(!chk){
            alert('Bạn chưa nhập banner!');
            return false;
        }

        $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')} });
        var token = $('input[name=_token]').val();

        $.ajax({
            url: "{{route('get-link-demo')}}",
            type: "POST",
            data: {chose:$('#chosetemp').val(),lst:JSON.stringify(arrDataInput)}
        }).done(function(result) {
            console.log('tra ve la :'+result);
            arrDataInput={};
            $('#allcontent').html('');
            if(result=='error not temp'){
                $('#urlexport').html(result);
            }else{
                result=result+'';
                var url=(location.protocol+location.port+'//'+location.hostname+'/'+result);
                $('#urlexport').html('<a href="'+url+'" target="_blank">'+url+'</a>');
            }
        });
    }
    function admSubform(){
        var sel=$('#admselecttype').val();
        arrDataInput[admZone]={};
        arrDataInput[admZone].size=arrDefine[dmchose][admZone].size;
        arrDataInput[admZone].width=arrDefine[dmchose][admZone].width;
        arrDataInput[admZone].height=arrDefine[dmchose][admZone].height;
        arrDataInput[admZone].src_bk='';
        arrDataInput[admZone].url=$('#adurl').val();
        if(sel==1){
            var b=/\.[A-Za-z]+$/.exec($('#adfile').val());
            if(b){
                arrDataInput[admZone].type=b[0].replace('.','');
                arrDataInput[admZone].src=$('#adfile').val();
                arrDataInput[admZone].src_bk=$('#adfilebk').val();
            }
        }else{
            arrDataInput[admZone].type='iframe';
            arrDataInput[admZone].src=$('#adscript').val();
        }

        $('#admzone_ban'+admZone).html('<div id="adnzone_'+admZone+'"></div>');
        var data = {
            "type": "7k",
            "size": arrDataInput[admZone].size,
            "adn": true,
            "is_db": 0,
            "ext": {
                "logo": "0",
                "balloon": "0"
            },
            "df": [],
            "lst": [{
                "src_bk": arrDataInput[admZone].src_bk,
                "width": arrDataInput[admZone].width,
                "link": arrDataInput[admZone].url,
                "is_default": 0,
                "l": "",
                "type": arrDataInput[admZone].type,
                "cid": Math.floor(Math.random()*1000000),
                "title": "",
                "link3rd": "",
                "tablet": 0,
                "height": arrDataInput[admZone].height,
                "link_views": "",
                "r": 70,
                "isview": "2",
                "src_exp": "",
                "cpa": 1,
                "src": arrDataInput[admZone].src,
                "bid": Math.floor(Math.random()*1000000),
                "pr": 1908915645
            }]
        }
        window['adnzone'+admZone] = new cpmzone(admZone);
        window['adnzone'+admZone].show(data);

    }
    function showInput(i){
        admZone=i;
        $('#admoverlay').show();
        $.ajax({
            url: "../template/form.html",
            context: document.body
        }).done(function(html) {
            $('#adminputShow').html(html);
            $('.admForm').css({'top':($(window).height()/2-$('.admForm').height()/2)+'px','left':($(window).width()/2-$('.admForm').width()/2)+'px'});
        });
    }
    function choseTemplate(t){
        $('#urlexport').html('');
        dmchose=arradmTemp[t].domain;
        $.ajax({
            url: "../template/"+arradmTemp[t].temp,
            context: document.body
        }).done(function(html) {
            $('#admshowInput').show();
            $('#allcontent').html(html);

            for(var i in arrDefine[dmchose]){
                console.log(arrDefine[dmchose][i]);
                $('#adszone_'+i).addClass('ban'+arrDefine[dmchose][i].size);
                $('#adszone_'+i).html('<div id="admzone_ban'+i+'"></div><a class="setting" href="javascript:showInput('+i+')"><img width="30" height="30" src="{{asset('images/settings-icon.png')}}" /></a>');
            }


        });
    }
    function choseTemplateInput(){
        for(var i in arrDefine[dmchose]){
            $('#adszone_'+i).addClass('ban'+arrDefine[dmchose][i].size);
            $('#adszone_'+i).html('<div id="admzone_ban'+i+'"></div><a class="setting" href="javascript:showInput('+i+')"><img width="30" height="30" src="{{asset('images/settings-icon.png')}}" /></a>');
        }
    }
</script>
<div class="exportLink">
    <input type="button" value="Xuất link" onClick="exportLink();" />
</div>
</body>
</html>
