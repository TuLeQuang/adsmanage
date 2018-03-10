<?php 
error_reporting(0);

header('Content-Type: text/html; charset=utf-8');
require('include/defined_mb.php');

if(isset($_POST) && $_POST['chose']!='' )
{
$arr=json_decode($_POST['lst']);

$chose=(int)$_POST['chose'];
$domain=$arrTemplate[$chose]['domain'];
$url=$arrTemplate[$chose]['temp'];
if(!file_exists('template/'.$arrTemplate[$chose]['temp'])) die('error not temp');
$filecontent=file_get_contents('template/'.$arrTemplate[$chose]['temp']);

$arrzone=array();
if(!empty($arr)){
	$arr->type = preg_replace('/^<\?php(.*)(\?>)?$/s', '$1', $arr->type);
	$arr->src = preg_replace('/^<\?php(.*)(\?>)?$/s', '$1', $arr->src);
	$arr->src=str_replace('http:','',$arr->src);
	$arr->src=str_replace('https:','',$arr->src);
	
	$type=$arr->type;
	
	$arrreplace=array(
					 "html"=> "",
					 "css"=> "",
					 "type"=>$arr->type,
					 "is_db"=> 0,    
					 "df"=>array(),
					 "os"=>1
	);
	$databanner=array(
					"cpc"=>array(),
					"cpm"=>array(
								array(
									
										"ret"=> "0",
										"statustext"=> "",
										"os_v"=> "",
										"moblocation"=> "0",
										"htmlcode1"=> "",
										"br_v"=> "",
										"terms"=> null,
										"link"=> $arr->url,
										"download"=> 0,
										"type"=> $arr->type,
										"htmlcode"=> "",
										"id"=> rand (1,1000000),
										"blogo"=> "",
										"title"=> "vespa-big-0401",
										"cpa"=> "0",
										"src"=> $arr->src,
										"kw"=> "",
										"os"=> "",
										"dv_m"=> "",
										"dv_t"=> "",
										"rich"=> "0",
										"star"=> 0,
										"l"=> "",
										"provider"=> "",
										"ispopup"=> "0",
										"cid"=> rand (1,1000000),
										"clk_call"=> "",
										"bname"=> "",
										"content"=> "",
										"buttonnote"=> "89317",
										"link3rd"=> "",
										"color"=> "",
										"la"=> "",
										"auto"=> "",
										"view"=> "0",
										"srcVideo"=> "",
										"pr"=> 1908915645
									
							)
					)
		);
	
	
	$filecontent=str_replace('<div id="adm_zone'.$type.'"></div>','<script>(function(){var data='.json_encode($arrreplace).',databanner='.json_encode($databanner).';window["mbzone'.$type.'"] = new zoneM('.$type.',data);
window["mbzone'.$type.'"].addBanners(databanner);})();</script>',$filecontent);

}
/*foreach($arrDefined[$domain] as $k=>$v){
	if(!in_array($k,$arrzone)){
		$filecontent=str_replace('<div id="admzone_'.$k.'"></div>','<script src="//admicro1.vcmedia.vn/ads_codes/ads_box_'.$k.'.ads"></script>',$filecontent);
	}
}*/
/*$filecontent=str_replace('<div id="admoverlaypage"></div>','<div id="admoverlaypage" style="position:fixed; top:0; left:0; width:100%; height:2000px; opacity:0.3; background:#000;z-index:9999;"></div>',$filecontent);*/
$tm=time();
$url=str_replace('.html','-'.$tm.'.html',$url);

file_put_contents(realpath(__DIR__).'/link/'.$url,$filecontent,LOCK_EX);
 $url=str_replace('ï»¿','',$url);
 $url=str_replace('ï»¿','',$url);
echo $url;
}
?>
