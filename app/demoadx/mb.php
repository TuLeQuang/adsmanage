<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
require('include/defined_mb.php');
?>
<title>create demo Adx</title>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/angular.min.js"></script>
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
<script src="http://admicro1.vcmedia.vn/core/mb_core.js"></script>
        <script language="javascript">
			
			ADM_CHECKER.setStorage('_azs','','','');
			ADM_CHECKER.setCookie('_azs','','','');
			ADM_CHECKER.setStorage('_ckPopup','','','');
			ADM_CHECKER.setCookie('_ckPopup','','','');
		</script>
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
    <input type="button" onClick="choseTemplate($('#chosetemp').val())" value="Chọn Mẫu giao diện" />
    <input type="button" id="admshowInput" onClick="choseTemplateInput()" style="display:none;" value="Hiển form nhập" />
    <br />
    <div id="urlexport">
    </div>
</div>
<div id="adminputShow">
</div>
<script>
var arrDefine=<?php echo $jsonDefined;?>;
var arradmTemp=<?php echo $jsonTemplate;?>;
var dmchose='dantri';
var arrDataInput={},admZone;
function admchangeType(){
	/*var sel=$('#admselecttype').val();
	if(sel==1){
		$('#admscript').hide();
		$('#admgroupFile').show();
	}else{
		$('#admgroupFile').hide();
		$('#admscript').show();
	}*/
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
	$.ajax({
		  url: "export_mb.php",
		  type: "POST",
		  data: {chose:$('#chosetemp').val(),lst:JSON.stringify(arrDataInput)}
	}).done(function(result) {
		arrDataInput={};
		$('#allcontent').html('');
		if(result=='error not temp'){
			$('#urlexport').html(result);
		}else{
			result=result+'';
			result=result.replace('ï»¿','');
			var url=(location.protocol+location.port+'//'+location.hostname+'/createdemoadx/link/'+result);
			$('#urlexport').html('<a href="'+url+'" target="_blank">'+url+'</a>');
		}
	});
}
function admSubform(){
	var sel=$('#admselecttype').val();
	arrDataInput={};
	arrDataInput.url=$('#adurl').val();
	arrDataInput.type=$('#admselecttype').val();
	arrDataInput.src=$('#adfile').val();
	arrDataInput.src_bk=$('#adfilebk').val();
	var type=arrDataInput.type;
	var admZone=type;
	var data = {
			"cpc":[],
			"cpm": [ {
			"ret": "0",
			"statustext": "",
			"os_v": "",
			"moblocation": "0",
			"htmlcode1": "",
			"br_v": "",
			"terms": null,
			"link": arrDataInput.url,
			"download": 0,
			"type": arrDataInput.type,
			"htmlcode": "",
			"id": Math.floor(Math.random()*1000000),
			"blogo": "",
			"title": "sunhouse-big-712",
			"cpa": "0",
			"src": arrDataInput.src,
			"kw": "",
			"os": "",
			"dv_m": "",
			"dv_t": "",
			"rich": "0",
			"star": 0,
			"l": "",
			"provider": "",
			"ispopup": "0",
			"cid": Math.floor(Math.random()*1000000),
			"clk_call": "",
			"bname": "",
			"content": "",
			"buttonnote": "87695",
			"link3rd": "",
			"color": "",
			"la": "",
			"auto": "",
			"view": "0",
			"srcVideo": "",
			"pr": 1908915645
		}]
	}
	/*
	window['mbzone'+admZone] = new zoneM(admZone, {
            "html": "",
            "css": "",
            "type": arrDataInput.type,
            "df": [],
            "os": 1
        });
		
	window['mbzone'+admZone].addBanners(data);
	*/
}
function showInput(){
	admZone=3;
	$('#admoverlay').show();
	$.ajax({
	  url: "form_mb.html",
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
	  url: "template/"+arradmTemp[t].temp,
	  context: document.body
	}).done(function(html) {
		$('#admshowInput').show();
		$('#allcontent').html(html);
		
            for(var i in arrDefine[dmchose]){
				console.log(arrDefine[dmchose][i]);
				$('#adszone_'+i).addClass('ban'+arrDefine[dmchose][i].size);
				$('#adszone_'+i).html('<div id="admzone_ban'+i+'"></div><a class="setting" href="javascript:showInput('+i+')"><img width="30" height="30" src="images/settings-icon.png" /></a>');
			}
        	
		
	});	
}
function choseTemplateInput(){
	showInput();
}
</script>
<div class="exportLink">
	<input type="button" value="Xuất link" onClick="exportLink();" />
</div>
</body>
</html>
