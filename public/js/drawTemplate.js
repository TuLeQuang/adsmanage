function drawAds(data,id) {
    var tem="";
    var div=document.createElement('div');
    div.id="run-ads";

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           tem = this.responseText;
           document.getElementById('ads').appendChild(div);
           var app = new Vue({
                el:'#run-ads',
                data() {
                    return data;
                },
                template:'<div style="height: auto; display: inline-block;">'+tem+'</div>',
            });
        }
    };
    xmlhttp.open("GET", "template/getTem/" + id, true);
    xmlhttp.send();



};
