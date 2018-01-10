//Drag Img
grid_size = 10;

$(" .box ")
/*.draggable({ grid: [ grid_size, grid_size ] })*/

    .resizable({ grid: grid_size * 2 })

    /*.on("mouseover", function(){
        $( this ).addClass("move-cursor")
    })*/

    .on("mousedown", function(){
        $( this )
            .removeClass("move-cursor")
            .addClass("grab-cursor")
            .addClass("opac");
    })

    .on("mouseup", function(){
        $( this )
            .removeClass("grab-cursor")
            .removeClass("opac")
            .addClass("move-cursor");
    });

//get items number
function itemsNum(num) {
    var items= "";
    for(i=1;i<=num;i++){
        var list_item='<table style="border-top:solid 1px #cdcdcd;margin-top: 5px"><tr><td><label for="imgUrl'+i+'">Image Url '+i+':</label></td><td><input id="imgUrl'+i+'" type="text" class="input-sm input-item"/></td><tr><td><label for="linkClick'+i+'">Link Click '+i+':</label></td><td><input id="linkClick'+i+'" type="text" class="input-sm input-item"/></td></tr><tr><td><label for="content'+i+'">Content '+i+':</label></td><td><input type="text" id="content'+i+'" class="input-sm input-item"/></td></tr></table>';
        items=items+list_item;
    }
    document.getElementById('items-list').innerHTML=items;
};
function changeNum() {
    var num = document.getElementById('itemNum');
    itemsNum(num.value);
}

//unEnable and Enable layout
function showView(viewId) {
    var a= document.getElementById(viewId);
    a.style.display='block';
}
function hideView(viewId) {
    var a= document.getElementById(viewId);
    a.style.display='none';
}

//template object
var template={
    template_data:" ",
    template_html:" ",
    getData : function() {
        return this.template_data;
    },
    getTemplate:function () {
        return this.template_html;
    },
    set:function (data,templateHTML) {
        this.template_data=data;
        template.template_html=templateHTML;
    }
};
var n=0;
//draw items
var dataArray=[];
var templateArray=[];
function itemsBuilder(){
    var num = document.getElementById('itemNum').value;
    var data_tg="";
    var imgSize='width:'+$("#imgSize").css("width")+';height:'+$("#imgSize").css("height")+';';
    var f = document.createDocumentFragment();
    var root= document.createElement('div');
    root.id="items-element"+n;
    root.className="items-class";
    root.innerHTML = '<div class="crud"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-wrench"></span></button><button type="button" onclick="deleteElement('+n+')" id="delete" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-remove"></span></button></div>';
    n++;
    for(var i=1;i<=num;i++){
        var imgUrlId='imgUrl'+i;
        var linkClickId='linkClick'+i;
        var contentId='content'+i;
        var img=document.createElement('img');
        var a=document.createElement('a');
        var content=document.createElement('span');
        img.src=document.getElementById(imgUrlId).value;
        img.style=imgSize;
        content.textContent=document.getElementById(contentId).value;
        a.href=document.getElementById(linkClickId).value;
        if(num>=2){
            f.appendChild(document.createElement('br'));
            f.appendChild(document.createElement('hr'));
        }
        f.appendChild(a);
        a.appendChild(img);
        f.appendChild(content);
        data_tg=data_tg+'{imgUrl:"'+document.getElementById(imgUrlId).value+'",linkClick:"'+document.getElementById(linkClickId).value+'",content:"'+document.getElementById(contentId).value+'"},';
    }
    var d= document.getElementById('template');
    root.appendChild(f);
    d.appendChild(root);
    hideView("items");
    var config='{required:'+document.getElementById('checkRequired').value+',max:'+document.getElementById('contentLenght').value +',url:true}';
    templateArray.push('<div v-for="item in items">'+'<input type="text" placeholder="imgUrl" name="imgUrl" v-model="item.imgUrl" v-validate="'+config+'"/><br>'+'<a :href="item.linkClick"><img :src="item.imgUrl" style="'+imgSize+'"></a><span>'+'{'+'{'+'item.content'+'}'+'}'+'</span><br></div>');
    dataArray.push('items:['+data_tg+'],');
    var txtData= document.getElementById('txtData');
    var txtTemplate= document.getElementById('txtTemplate');
    txtData.value=dataArray.join(" ");
    txtTemplate.value=templateArray.join(" ");
}

//draw title
function titleBuilder(){
    var f = document.createDocumentFragment();
    var root= document.createElement('div');
    root.id="items-element"+n;
    root.className="items-class";
    root.innerHTML='<div class="crud"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-wrench"></span></button><button type="button" onclick="deleteElement('+n+')" id="delete" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-remove"></span></button></div>';
    n++;
    var title=document.createElement('p');
    var titleData= document.getElementById('txtTitle').value;
    title.textContent=titleData;
    f.appendChild(title);
    dataArray.push('title:"'+titleData+'",');
    templateArray.push('<p>'+'{'+'{'+'title'+'}'+'}'+'</p>');
    var d= document.getElementById('template');
    root.appendChild(f);
    d.appendChild(root);
    hideView("title");

    //save data,template to input
    var txtData= document.getElementById('txtData');
    var txtTemplate= document.getElementById('txtTemplate');
    txtData.value=dataArray.join(" ");
    txtTemplate.value=templateArray.join(" ");
}

//save template to db
function saveTemplate() {
    var tem_data='{'+dataArray.join(" ")+'}';
    var txtData= document.getElementById('txtData');
    var txtTemplate= document.getElementById('txtTemplate');
    txtData.value=tem_data;
    txtTemplate.value=templateArray.join(" ");
}


function clear() {
    var items = document.getElementById("template");
    while (items.hasChildNodes()) {
        items.removeChild(items.firstChild);
    }
}

function deleteElement(n) {
    $("#items-element"+n).remove();

    var txtData= document.getElementById('txtData');
    var txtTemplate= document.getElementById('txtTemplate');

    var data= txtData.value;
    var templateHTML= txtTemplate.value;

    template.set(data.replace(dataArray[n],""),templateHTML.replace(templateArray[n],""));
    dataArray.splice(n, 1,'');templateArray.splice(n, 1,'');
    txtData.value=template.getData();
    txtTemplate.value=template.getTemplate();
}