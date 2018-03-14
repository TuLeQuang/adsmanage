<?php

namespace App\demoadx\includes;

class defined_mb
{
    function arrayTemplate(){
        $arrTemplate=array(
            array(
                'domain'=>'dantri',
                'temp'=>'m-dantri-vanhoa.html',
                'title'=>'Dantri-Văn hóa'
            ),array(
                'domain'=>'dantri',
                'temp'=>'m-dantri-kinhdoanh.html',
                'title'=>'Dantri-Kinh doanh'
            ),array(
                'domain'=>'dantri',
                'temp'=>'m-dantri-xahoi.html',
                'title'=>'Dantri-Xã hội'
            ),
            array(
                'domain'=>'cafef',
                'temp'=>'m-cafef-all.html',
                'title'=>'Cafef-Xuyên site'
            ),
            array(
                'domain'=>'afamily',
                'temp'=>'m-afamily-all.html',
                'title'=>'Afamily-Xuyên site'
            ),array(
                'domain'=>'afamily',
                'temp'=>'m-afamily-anngon.html',
                'title'=>'Afamily- Ăn ngon'
            ),array(
                'domain'=>'afamily',
                'temp'=>'m-afamily-mevabe.html',
                'title'=>'Afamily- Mẹ và bé'
            ),array(
                'domain'=>'thethaovanhoa',
                'temp'=>'m-thethaovanhoa-all.html',
                'title'=>'Thể thao văn hóa-Xuyên site'
            ),array(
                'domain'=>'thethaovanhoa',
                'temp'=>'m-thethaovanhoa-video.html',
                'title'=>'Thể thao văn hóa-video'
            ),
        );
        return $jsonTemplate=json_encode($arrTemplate);

    }

    function arrayDefined(){
        $arrDefined=array(
            array(
                'type'=>'3',
                'width'=>980,
                'height'=>90,
                'sticky'=>false
            ),
            array(
                'type'=>'4',
                'width'=>980,
                'height'=>90,
                'sticky'=>false
            ),
            array(
                'type'=>'10',
                'width'=>980,
                'height'=>90,
                'sticky'=>false
            ),
            array(
                'type'=>'9',
                'width'=>980,
                'height'=>90,
                'sticky'=>false
            ),
            array(
                'type'=>'15',
                'width'=>980,
                'height'=>90,
                'sticky'=>false
            )
        );
        return $jsonDefined=json_encode($arrDefined);
    }
}