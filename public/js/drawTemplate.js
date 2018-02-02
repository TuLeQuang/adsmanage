function drawAds(data,id) {
    var tem="";
    var div=document.createElement('div');
    div.id="app";

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           tem = this.responseText;
           document.getElementById('template-layout').appendChild(div);
           var app = new Vue({
                el:'#app',
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
