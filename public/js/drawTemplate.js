function drawAds(data,id) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //console.log(this.response);
            var div=document.createElement('div');
            div.id="run-ads";
            document.getElementsByTagName('body')[0].appendChild(div);
            var style=document.createElement('style');
            style.textContent='.itemClass{display:block;height: auto;overflow: hidden;line-height: 15px;color: #000000;font-size: 11px;font-family: tahoma,arial;padding:9px;border-bottom:1px solid #cdcdcd ;vertical-align: middle;}'+
                '.itemClass a {color: #0f0f0f;text-decoration: none;}.itemClass a span {color: #0f0f0f;padding-left: 8px ;}.itemClass a div {color: #0f0f0f;padding-left: 10px;display: flex;}';
            document.getElementsByTagName('head')[0].appendChild(style);
           var app = new Vue({
                el:'#run-ads',
                data() {
                    return data;
                },
                template:'<div style="height: auto; display: inline-block;">'+this.response+'</div>',
            });
        }
    };
    xmlhttp.open("get", "../ads/getAdsScript/" + id, true);
    xmlhttp.send();
};
