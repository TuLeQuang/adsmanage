
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
var n=-1;
var dataArray=[];
var templateArray=[];

//show items form
function showItemsConfig() {
 /*   var options="";
    for(i=1;i<=7;i++){
        options+='<option value='+i+'>'+i+'</option>';
    }
    var itemForm=document.createElement('div');
    var itemName= "'items'";
    itemForm.innerHTML='<table><tr><td><label for="itemNum">Items Number:</label></td><td><select id="itemNum" class="input-sm" style="background: whitesmoke;margin-left: 10px" onchange="changeNum()"><option selected="true" disabled="disabled" value="0">Chọn số lượng Items</option>'+options+'</select></td></tr><tr><td><label for="required">Img Url Required: </label></td><td><input type="checkbox" id="itemsRequired" style="margin-left: 10px"></td><td><label for="Content">Content max lenght: </label></td><td><input type="number" style="width: 50px" value="20" id="contentLenght"></td></tr><tr><td><label>Image Size:</label></td><td><div id="imgSize" class="box">Kéo để chọn size</div></td></tr></table><div id="items-list"></div><button class="btn btn-danger" id="btn-close-items" onclick="hideView('+itemName+')" style="margin: 15px 0px 0px 15px">Close</button>';
    itemForm.id="items";
    itemForm.style.display="block";
    itemForm.style.width='100%';*/
    n++;
    var root= document.createElement('div');
    root.id="element"+n;
    root.className="items-class";
    var d=document.getElementById('template');
    d.appendChild(root);
    showView('items');
   /* d.appendChild(itemForm);*/
};

//draw item with number of items
function itemsBuilder(num,n) {
    var d = document.getElementById('element'+n);
    while (d.hasChildNodes()) {
        d.removeChild(d.firstChild);
    }
    var items= "";
    var f = document.createDocumentFragment();
    var crud= document.createElement('div');
    crud.className="crud";
    crud.innerHTML='<button type="button" class="btn btn-default btn-sm" onclick="editItemsElement()"><span class="glyphicon glyphicon-wrench"></span></button><button type="button" onclick="deleteElement('+n+')" id="delete" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-remove"></span></button>';
    f.appendChild(crud);
    for(var i=1;i<=num;i++){
        var list_item='<table style="border-top:solid 1px #cdcdcd;margin-top: 5px"><tr><td><label for="imgUrl'+i+'">Image Url '+i+':</label></td><td><input id="txtImgUrl'+i+'" type="text" class="input-sm input-item" onchange="itemsChange('+n+')"/></td><tr><td><label for="linkClick'+i+'">Link Click '+i+':</label></td><td><input id="txtLinkClick'+i+'" type="text" onchange="itemsChange('+n+')" class="input-sm input-item"/></td></tr><tr><td><label for="content'+i+'">Content '+i+':</label></td><td><input type="text" id="txtContent'+i+'" onchange="itemsChange('+n+')" class="input-sm input-item"/></td></tr></table>';
        items=items+list_item;
        var img=document.createElement('img');
        var a=document.createElement('a');
        var content=document.createElement('span');
        a.id='linkClick'+i;
        img.id='imgUrl'+i;
        content.id='content'+i;
        if(num>=2){
            f.appendChild(document.createElement('br'));
            f.appendChild(document.createElement('hr'));
        }
        f.appendChild(a);
        a.appendChild(img);
        f.appendChild(content);
        d.appendChild(f)
    }
    document.getElementById('items-list').innerHTML=items;
};

//
function changeNum() {
    var num = document.getElementById('itemNum');
    itemsBuilder(num.value,n);
}

//saveData change in items
function itemsChange(n) {
    var num = document.getElementById('itemNum');
    var data_tg="";
    var imgSize='width:'+$("#imgSize").css("width")+';height:'+$("#imgSize").css("height")+';';
    for(var i=1;i<=num.value;i++){
        var imgUrlId='txtImgUrl'+i,linkClickId='txtLinkClick'+i,contentId='txtContent'+i;
        var imgId='imgUrl'+i,aId='linkClick'+i,spanId='content'+i;
        var img=document.getElementById(imgId);
        var a=document.getElementById(aId);
        var span=document.getElementById(spanId);
        img.src=document.getElementById(imgUrlId).value;
        img.style=imgSize;
        span.textContent=document.getElementById(contentId).value;
        a.href=document.getElementById(linkClickId).value;
        data_tg=data_tg+'{imgUrl:"'+document.getElementById(imgUrlId).value+'",linkClick:"'+document.getElementById(linkClickId).value+'",content:"'+document.getElementById(contentId).value+'"},';
    }
    if(document.getElementById('itemsRequired').checked){
        var imgUrlConfig='{required:true,url:true}',
            contentConfig='{max:'+document.getElementById('contentLenght').value+'}';
    }
    else {
        var imgUrlConfig='{required:false,url:true}',
            contentConfig='{max:'+document.getElementById('contentLenght').value+'}';
    }

    dataArray[n]='items:['+data_tg+'],';
    templateArray[n]='<div v-for="item in items"><input type="text" placeholder="imgUrl" name="imgUrl" v-model="item.imgUrl" v-validate="'+imgUrlConfig+'"/><br><a :href="item.linkClick"><img :src="item.imgUrl" style="'+imgSize+'"></a><input type="text" placeholder="Content" name="content" v-model="item.content" v-validate="'+contentConfig+'"/><br><span>'+'{'+'{'+'item.content'+'}'+'}'+'</span><br></div>';

    var txtData= document.getElementById('txtData');
    var txtTemplate= document.getElementById('txtTemplate');
    txtData.value=dataArray.join(" ");
    txtTemplate.value=templateArray.join(" ");
}

function editItemsElement() {
    showView('items');
}

function showTitleConfig() {
    n++;
    var root= document.createElement('div');
    root.id="element"+n;
    root.className="items-class";
    var d=document.getElementById('template');
    d.appendChild(root);
    showView('title');
    titleBuilder(n);
    var titleData= document.getElementById('txtTitle');
    titleData.onchange= function() {titleChange(n)};
}

//draw title
function titleBuilder(n){
    var d = document.getElementById('element'+n);
    while (d.hasChildNodes()) {
        d.removeChild(d.firstChild);
    };
    var f = document.createDocumentFragment();
    var crud= document.createElement('div');
    crud.className="crud";
    crud.innerHTML='<button type="button" class="btn btn-default btn-sm" onclick="editTitleElement()"><span class="glyphicon glyphicon-wrench"></span></button><button type="button" onclick="deleteElement('+n+')" id="delete" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-remove"></span></button>';
    f.appendChild(crud);
    var title=document.createElement('p');
    title.id="titleElement";
    f.appendChild(title);
    d.appendChild(f);

};

function titleChange(n) {
    var title=document.getElementById('titleElement');
    var titleData= document.getElementById('txtTitle').value;
    title.textContent=titleData;

    if(document.getElementById('titleRequired').checked)
        var titleConfig='{required:true,max:'+document.getElementById('titleLenght').value+'}';
    else
        var titleConfig='{required:true,max:'+document.getElementById('titleLenght').value+'}';

    dataArray[n]='title:"'+titleData+'",';
    templateArray[n]='<input type="text" placeholder="Title" name="title" v-model="title" v-validate="'+titleConfig+'"/><br><p>'+'{'+'{'+'title'+'}'+'}'+'</p>';

    var txtData= document.getElementById('txtData');
    var txtTemplate= document.getElementById('txtTemplate');
    txtData.value=dataArray.join(" ");
    txtTemplate.value=templateArray.join(" ");
}

function editTitleElement() {
    showView('title');
}


//save template to db
function saveTemplate() {
    var tem_data='{'+dataArray.join(" ")+'}';
    var txtData= document.getElementById('txtData');
    var txtTemplate= document.getElementById('txtTemplate');
    txtData.value=tem_data;
    txtTemplate.value=templateArray.join(" ");
};


function clear() {
    var items = document.getElementById("template");
    while (items.hasChildNodes()) {
        items.removeChild(items.firstChild);
    }
};

function deleteElement(n) {
    $("#element"+n).remove();
    hideView('items');
    var txtData= document.getElementById('txtData');
    var txtTemplate= document.getElementById('txtTemplate');

    var data= txtData.value;
    var templateHTML= txtTemplate.value;

    template.set(data.replace(dataArray[n],""),templateHTML.replace(templateArray[n],""));
    dataArray.splice(n, 1,'');templateArray.splice(n, 1,'');
    txtData.value=template.getData();
    txtTemplate.value=template.getTemplate();
};