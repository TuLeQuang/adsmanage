
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
    if(typeof(document.getElementsByClassName('items-class')[0]) === 'undefined'){
        n++;
        var root= document.createElement('div');
        root.id="element"+n;
        root.className="items-class";
        var d=document.getElementById('template');
        d.appendChild(root);
        showView('items');

        var required= document.getElementById('itemsRequired');
        var lenght= document.getElementById('contentLenght');
        required.setAttribute("onchange","itemsChange("+n+")");
        lenght.setAttribute("onchange","itemsChange("+n+")");
        /* d.appendChild(itemForm);*/
    }
    else {
        showView('items');
    }

};

//draw item with number of items
function itemsBuilder(num,n,elementConfigId) {
    var d = document.getElementById('element'+n);
    while (d.hasChildNodes()) {
        d.removeChild(d.firstChild);
    }
    var items= "";
    var f = document.createDocumentFragment();
    var crud= document.createElement('div');
    crud.className="crud";
    crud.innerHTML='<button type="button" class="btn btn-default btn-sm" onclick="showView('+elementConfigId+')"><span class="glyphicon glyphicon-wrench"></span></button><button type="button" onclick="deleteElement('+n+')" id="delete" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-remove"></span></button>';
    f.appendChild(crud);
    for(var i=1;i<=num;i++){
        var list_item='<table style="border-top:solid 1px #cdcdcd;margin-top: 5px"><tr><td><label for="imgUrl'+i+'">Image Url '+i+':</label></td><td><input id="txtImgUrl'+i+'" type="text" class="input-sm input-item" onchange="itemsChange('+n+')"/></td><tr><td><label for="linkClick'+i+'">Link Click '+i+':</label></td><td><input id="txtLinkClick'+i+'" type="text" onchange="itemsChange('+n+')" class="input-sm input-item"/></td></tr><tr><td><label for="content'+i+'">Content '+i+':</label></td><td><input type="text" id="txtContent'+i+'" onchange="itemsChange('+n+')" class="input-sm input-item"/></td></tr></table>';
        items=items+list_item;
        var img=document.createElement('img');
        var a=document.createElement('a');
        var div=document.createElement('div');
       var content= document.createElement('div');

        a.id='linkClick'+i;
        a.target="_blank";
        img.id='imgUrl'+i;
        img.align="left";
        content.id='content'+i;
        div.className='itemcss';

        a.appendChild(img);
        a.appendChild(content);
        div.appendChild(a);
        f.appendChild(div);
        d.appendChild(f);
    }
    document.getElementById('items-list').innerHTML=items;
};

//
function changeNum() {
    var num = document.getElementById('itemNum');
    itemsBuilder(num.value,n,"'items'");
}

//saveData change in items
function itemsChange(n) {
    var num = document.getElementById('itemNum');
    var data_tg="";
    var imgSize='width:'+$("#imgSize").css("width")+';height:'+$("#imgSize").css("height")+';';
    for(var i=1;i<=num.value;i++){
        var imgUrlId='txtImgUrl'+i, linkClickId='txtLinkClick'+i, contentId='txtContent'+i;
        var imgId='imgUrl'+i, aId='linkClick'+i,contentDiv='content'+i;
        var img=document.getElementById(imgId);
        var a=document.getElementById(aId);
        var content=document.getElementById(contentDiv);

        img.src=document.getElementById(imgUrlId).value;
        img.style=imgSize;
        img.align="left";
        img.title=document.getElementById(contentId).value;

        content.textContent=document.getElementById(contentId).value;

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
    templateArray[n]='<div v-for="item in items"><div class="itemcss"><a :href="item.linkClick" target="_blank"><img :src="item.imgUrl" style="'+imgSize+'" align="left"><medium name="content" v-model="item.content" v-validate="'+contentConfig+'" style="padding-left: 10px"></medium></a></div></div>';

    var txtData= document.getElementById('txtData');
    var txtTemplate= document.getElementById('txtTemplate');
    txtData.value=dataArray.join(" ");
    txtTemplate.value=templateArray.join(" ");
}

function showTitleConfig() {
    if(typeof(document.getElementsByClassName('title-class')[0]) === 'undefined'){
        n++;
        var root= document.createElement('div');
        root.id="element"+n;
        root.className="title-class";
        var d=document.getElementById('template');
        d.appendChild(root);
        showView('title');
        titleBuilder(n,"'title'");
        var titleData= document.getElementById('txtTitle');
        var color=document.getElementById('titleColor');
        var fontSizeRange=document.getElementById('titleFontRange');
        var fontSizeText=document.getElementById('titleFontText');
        var required= document.getElementById('titleRequired');
        var lenght= document.getElementById('titleLenght');
        var bgColor= document.getElementById('titleBgColor');

        fontSizeRange.setAttribute("onchange","titleChange("+n+")");
        color.setAttribute("onchange","titleChange("+n+")");
        fontSizeText.setAttribute("onchange","titleChange("+n+")");
        titleData.setAttribute("onchange","titleChange("+n+")");
        required.setAttribute("onchange","titleChange("+n+")");
        lenght.setAttribute("onchange","titleChange("+n+")");
        bgColor.setAttribute("onchange","titleChange("+n+")");
        titleChange(n);
    }
    else
        showView('title');
}

//draw title
function titleBuilder(n,elementConfigId){
    var d = document.getElementById('element'+n);
    while (d.hasChildNodes()) {
        d.removeChild(d.firstChild);
    };
    var f = document.createDocumentFragment();
    var crud= document.createElement('div');
    crud.className="crud";
    crud.innerHTML='<button type="button" class="btn btn-default btn-sm" onclick="showView('+elementConfigId+')"><span class="glyphicon glyphicon-wrench"></span></button><button type="button" onclick="deleteElement('+n+')" id="delete" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-remove"></span></button>';
    f.appendChild(crud);
    var title=document.createElement('div');
    title.id="titleElement";
    title.style.padding="5px 5px 5px 15px";
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
        var titleConfig='{required:false,max:'+document.getElementById('titleLenght').value+'}';

  /*  document.getElementById('titleFontText').value=document.getElementById('titleFontRange').value;
    document.getElementById('titleFontRange').value= document.getElementById('titleFontText').value;*/
    title.style.color=document.getElementById('titleColor').value;
    title.style.fontSize=document.getElementById('titleFontText').value+'px';
    title.style.backgroundColor=document.getElementById('titleBgColor').value;

    var titleStyle='color:'+document.getElementById('titleColor').value+';font-size:'+document.getElementById('titleFontText').value+'px;background-color:'+document.getElementById('titleBgColor').value+';padding:5px 5px 5px 10px;';
    dataArray[n]='title:"'+titleData+'",';
    templateArray[n]='<medium style="'+titleStyle+'" name="title" v-model="title" v-validate="'+titleConfig+'"></medium>';

    var txtData= document.getElementById('txtData');
    var txtTemplate= document.getElementById('txtTemplate');
    txtData.value=dataArray.join(" ");
    txtTemplate.value=templateArray.join(" ");
}

function showSponsorConfig(){
    if(typeof(document.getElementsByClassName('sponsor-class')[0]) === 'undefined'){
        n++;
        var root= document.createElement('div');
        root.id="element"+n;
        root.className="sponsor-class";
        var d=document.getElementById('template');
        d.appendChild(root);
        showView('sponsor');
        sponsorBuilder(n,"'sponsor'");

        var color=document.getElementById('sponsorColor');
        var name=document.getElementById('sponsorName');
        var maxLenght =document.getElementById('sponsorLenght');
        color.setAttribute("onchange","sponsorChange("+n+")");
        name.setAttribute("onchange","sponsorChange("+n+")");
        maxLenght.setAttribute("onchange","sponsorChange("+n+")");

        sponsorChange(n);
    }
    else
        showView('sponsor');
}

//draw title
function sponsorBuilder(n,elementConfigId){
    var d = document.getElementById('element'+n);
    while (d.hasChildNodes()) {
        d.removeChild(d.firstChild);
    };
    var f = document.createDocumentFragment();
    var crud= document.createElement('div');
    crud.className="crud";
    crud.innerHTML='<button type="button" class="btn btn-default btn-sm" onclick="showView('+elementConfigId+')"><span class="glyphicon glyphicon-wrench"></span></button><button type="button" onclick="deleteElement('+n+')" id="delete" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-remove"></span></button>';
    f.appendChild(crud);
    var div= document.createElement('div');
    div.style.padding="5px 5px 5px 15px";
    var sponsor=document.createElement('span');
    sponsor.id="sponsorElement";
    sponsor.style.fontWeight="bold";
    var text=document.createElement('span');
    text.textContent=" tài trợ thông tin.";
    div.appendChild(sponsor);
    div.appendChild(text);
    f.appendChild(div);
    d.appendChild(f);
};

function sponsorChange(n) {
    var sponsor=document.getElementById('sponsorElement');
    var sponsorName= document.getElementById('sponsorName').value;
    sponsor.textContent=sponsorName;
    sponsor.style.color=document.getElementById('sponsorColor').value;

    var sponsorStyle='color:'+document.getElementById('sponsorColor').value+';font-weight:bold;float:left';
    var sponsorConfig='{required:true,max:'+document.getElementById('sponsorLenght').value+'}';
    dataArray[n]='sponsor:"'+sponsorName+'",';
    templateArray[n]='<div style="padding:5px 5px 5px 10px"><medium style="'+sponsorStyle+'" name="sponsor" v-model="sponsor" v-validate="'+sponsorConfig+'"></medium><span> &ensp;tài trợ thông tin</span></div>';

    var txtData= document.getElementById('txtData');
    var txtTemplate= document.getElementById('txtTemplate');
    txtData.value=dataArray.join(" ");
    txtTemplate.value=templateArray.join(" ");
};

function showImageConfig() {
    if(typeof(document.getElementsByClassName('image-class')[0]) === 'undefined'){
        n++;
        var root= document.createElement('div');
        root.id="element"+n;
        root.className="image-class";
        var d=document.getElementById('template');
        d.appendChild(root);
        showView('image');
        imageBuilder(n,"'image'");
        var imageUrl= document.getElementById('txtImageUrl');
        var imageLink=document.getElementById('txtImageLink');
        imageUrl.setAttribute("onchange","imageChange("+n+")");
        imageLink.setAttribute("onchange","imageChange("+n+")");
    }
    else
        showView('image');
}

// draw image
function imageBuilder(n,elementConfigId) {
    var d = document.getElementById('element'+n);
    while (d.hasChildNodes()) {
        d.removeChild(d.firstChild);
    };
    var f = document.createDocumentFragment();
    var crud= document.createElement('div');
    crud.className="crud";
    crud.innerHTML='<button type="button" class="btn btn-default btn-sm" onclick="showView('+elementConfigId+')"><span class="glyphicon glyphicon-wrench"></span></button><button type="button" onclick="deleteElement('+n+')" id="delete" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-remove"></span></button>';
    f.appendChild(crud);

    var imageLinkClick=document.createElement('a');
    imageLinkClick.id="imageLinkClick";
    imageLinkClick.target="_blank";
    var imageUrl=document.createElement('img');
    imageUrl.id="imageUrl";
    f.appendChild(imageLinkClick);
    imageLinkClick.appendChild(imageUrl);
    d.appendChild(f);
}

function imageChange(n) {
    var imageSize='width:'+$("#imageSize").css("width")+';height:'+$("#imageSize").css("height")+';';
    var imgUrlId='txtImageUrl',linkClickId='txtImageLink';
    var imgId='imageUrl',aId='imageLinkClick';
    var img=document.getElementById(imgId);
    var a=document.getElementById(aId);
    img.src=document.getElementById(imgUrlId).value;
    img.style=imageSize;
    a.href=document.getElementById(linkClickId).value;

    dataArray[n]='imageLink:"'+document.getElementById(linkClickId).value+'",imageUrl:"'+document.getElementById(imgUrlId).value+'",';
    templateArray[n]='<a :href="imageLink" target="_blank"><img :src="imageUrl" style="'+imageSize+'"></a>';

    var txtData= document.getElementById('txtData');
    var txtTemplate= document.getElementById('txtTemplate');
    txtData.value=dataArray.join(" ");
    txtTemplate.value=templateArray.join(" ");
}

//template config
function templateChange() {
    var templateWidth= document.getElementById('txtWidth');
    var templateHeight= document.getElementById('txtHeight');
    if(templateWidth.value!=null)
        document.getElementById('template').style.width=templateWidth.value+'px';
    else
        document.getElementById('template').style.width="auto";
}

//save template to db
function saveTemplate() {
    //get style for template
    var templateStyle= document.getElementById('template').style;

    var tem_data='{'+dataArray.join(" ")+'}';
    var txtData= document.getElementById('txtData');
    var txtTemplate= document.getElementById('txtTemplate');
    txtData.value=tem_data;
    txtTemplate.value='<div style="'+templateStyle.cssText+'">'+templateArray.join(" ")+'</div>';
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
