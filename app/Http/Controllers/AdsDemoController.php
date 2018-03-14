<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\demoadx\includes\defined;
use App\demoadx\includes\defined_mb;
class AdsDemoController extends Controller
{
    public function index(){
        $defined= new defined();
        $arrTemplate=json_decode($defined->arrayTemplate(),true);
        $arrDefined=json_decode($defined->arrayDefined(),true);
        return view('admin.demo.web-demo',compact(['arrTemplate','arrDefined']));
    }

    public function indexMobi(){
        $defined_mb= new defined_mb();
        $arrTemplate=json_decode($defined_mb->arrayTemplate(),true);
        $arrDefined=json_decode($defined_mb->arrayDefined(),true);
        return view('admin.demo.web-mb-demo',compact(['arrTemplate','arrDefined']));
    }

    public function getTemplateWeb(Request $request){
        return Request::all();
    }

    public function getLinkDemo(Request $request){
            if(isset($request) && $request->chose!='' )
            {
                $defined= new defined();
                $arrTemplate=json_decode($defined->arrayTemplate(),true);
                $arrDefined=json_decode($defined->arrayDefined(),true);
                $arr=json_decode( $request->lst);
                $chose=(int)$request->chose;
                $domain=$arrTemplate[$chose]['domain'];
                $url=$arrTemplate[$chose]['temp'];
                if(!file_exists('template/'.$arrTemplate[$chose]['temp'])) die('error not temp');
                $filecontent=file_get_contents('template/'.$arrTemplate[$chose]['temp']);

                $arrzone=array();
                foreach($arr as $k=>$v){
                    $v->src_bk = preg_replace('/^<\?php(.*)(\?>)?$/s', '$1', $v->src_bk);
                    $v->type = preg_replace('/^<\?php(.*)(\?>)?$/s', '$1', $v->type);
                    $v->src = preg_replace('/^<\?php(.*)(\?>)?$/s', '$1', $v->src);
                    $arrzone[]=$k;
                    $arrreplace=array(
                        "type"=> "7k",
                        "adn"=> true,
                        "size"=>$v->size,
                        "is_db"=> 0,
                        "df"=>array(),
                        "lst"=>array(
                            array(
                                "src_bk"=> $v->src_bk,
                                "width"=> (int) $v->width,
                                "link"=> $v->url,
                                "is_default"=> 0,
                                "l"=> "",
                                "type"=> $v->type,
                                "cid"=> rand (1,1000000),
                                "title"=> "",
                                "link3rd"=> "",
                                "tablet"=> 0,
                                "height"=> (int) $v->height,
                                "link_views"=> "",
                                "r"=> 70,
                                "isview"=> "2",
                                "src_exp"=> "",
                                "cpa"=> 0,
                                "src"=> $v->src,
                                "bid"=> rand (1,1000000),
                                "pr"=> 1908915645
                            )
                        )
                    );

                    if($arrDefined[$domain][$k]['sticky']){
                        $filecontent=str_replace('<div id="adszone_'.$k.'"></div>','<div id="adszone_'.$k.'" style="position:relative; z-index:99999;"><div id="advZoneStickyTop" style="width:'.$arrDefined[$domain][$k]['width'].'px'+'; margin: 0 auto;"><span></span></div><div id="advZoneSticky"><div id="adnzone_'.$k.'"></div></div></div><script src="http://admicro1.vcmedia.vn/core/core_sticky.js"></script><script>(function(){var data='.json_encode($arrreplace).';window["adnzone'.$k.'"] = new cpmzone('.$k.');
window["adnzone'.$k.'"].show(data);})();</script><script>
 AdmonDomReady(function () { advScroll("Sticky", 600, ["adm_sticky_footer", 680]); admaddEventListener(window, "scroll", function () { advScroll("Sticky", 600, ["adm_sticky_footer", 680]); }); }); 
</script>',$filecontent);

                    }
                    else{
                        $filecontent=str_replace('<div id="adszone_'.$k.'"></div>','<div id="adszone_'.$k.'" style="position:relative; z-index:99999;"><div id="adnzone_'.$k.'"></div></div><script>(function(){var data='.json_encode($arrreplace).';window["adnzone'.$k.'"] = new cpmzone('.$k.');
window["adnzone'.$k.'"].show(data);})();</script>',$filecontent);

                    }
                }
                foreach($arrDefined[$domain] as $k=>$v){
                    if(!in_array($k,$arrzone)){
                        $filecontent=str_replace('<div id="adszone_'.$k.'"></div>','<script src="//admicro1.vcmedia.vn/ads_codes/ads_box_'.$k.'.ads"></script>',$filecontent);
                    }
                }
                $filecontent=str_replace('<div id="admoverlaypage"></div>','<div id="admoverlaypage" style="position:fixed; top:0; left:0; width:100%; height:2000px; opacity:0.3; background:#000;z-index:9999;"></div>',$filecontent);
                $tm=time();
                $url=str_replace('.html','-'.$tm.'.html',$url);
                file_put_contents('link/'.$url,$filecontent,LOCK_EX);
               echo 'link/'.$url;
            }
    }

    public function getLinkDemoMobi(Request $request){
        if(isset($request) && $request->chose!='') {
            $defined_mb = new defined();
            $arrTemplate = json_decode($defined_mb->arrayTemplate(), true);
            $arrDefined = json_decode($defined_mb->arrayDefined(), true);

            $arr=json_decode( $request->lst);
            $chose=(int)$request->chose;
            $domain=$arrTemplate[$chose]['domain'];
            $url=$arrTemplate[$chose]['temp'];

            if (!file_exists('template/' . $arrTemplate[$chose]['temp'])) die('error not temp');
            $filecontent = file_get_contents('template/' . $arrTemplate[$chose]['temp']);

            $arrzone = array();
            if (!empty($arr)) {
                $arr->type = preg_replace('/^<\?php(.*)(\?>)?$/s', '$1', $arr->type);
                $arr->src = preg_replace('/^<\?php(.*)(\?>)?$/s', '$1', $arr->src);
                $arr->src = str_replace('http:', '', $arr->src);
                $arr->src = str_replace('https:', '', $arr->src);

                $type = $arr->type;

                $arrreplace = array(
                    "html" => "",
                    "css" => "",
                    "type" => $arr->type,
                    "is_db" => 0,
                    "df" => array(),
                    "os" => 1
                );
                $databanner = array(
                    "cpc" => array(),
                    "cpm" => array(
                        array(

                            "ret" => "0",
                            "statustext" => "",
                            "os_v" => "",
                            "moblocation" => "0",
                            "htmlcode1" => "",
                            "br_v" => "",
                            "terms" => null,
                            "link" => $arr->url,
                            "download" => 0,
                            "type" => $arr->type,
                            "htmlcode" => "",
                            "id" => rand(1, 1000000),
                            "blogo" => "",
                            "title" => "vespa-big-0401",
                            "cpa" => "0",
                            "src" => $arr->src,
                            "kw" => "",
                            "os" => "",
                            "dv_m" => "",
                            "dv_t" => "",
                            "rich" => "0",
                            "star" => 0,
                            "l" => "",
                            "provider" => "",
                            "ispopup" => "0",
                            "cid" => rand(1, 1000000),
                            "clk_call" => "",
                            "bname" => "",
                            "content" => "",
                            "buttonnote" => "89317",
                            "link3rd" => "",
                            "color" => "",
                            "la" => "",
                            "auto" => "",
                            "view" => "0",
                            "srcVideo" => "",
                            "pr" => 1908915645

                        )
                    )
                );

                $filecontent = str_replace('<div id="adm_zone' . $type . '"></div>', '<script>(function(){var data=' . json_encode($arrreplace) . ',databanner=' . json_encode($databanner) . ';window["mbzone' . $type . '"] = new zoneM(' . $type . ',data);
window["mbzone' . $type . '"].addBanners(databanner);})();</script>', $filecontent);

            }
            /*foreach($arrDefined[$domain] as $k=>$v){
                if(!in_array($k,$arrzone)){
                    $filecontent=str_replace('<div id="admzone_'.$k.'"></div>','<script src="//admicro1.vcmedia.vn/ads_codes/ads_box_'.$k.'.ads"></script>',$filecontent);
                }
            }*/
            /*$filecontent=str_replace('<div id="admoverlaypage"></div>','<div id="admoverlaypage" style="position:fixed; top:0; left:0; width:100%; height:2000px; opacity:0.3; background:#000;z-index:9999;"></div>',$filecontent);*/
            $tm = time();
            $url = str_replace('.html', '-' . $tm . '.html', $url);

            file_put_contents('link/' . $url, $filecontent, LOCK_EX);
            $url = str_replace('ï»¿', '', $url);
            $url = str_replace('ï»¿', '', $url);
            echo $url;
        }
    }

}
