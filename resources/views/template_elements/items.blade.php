@extends('admin.layout.index')
@section('title')
  <title>Create Template Element</title>
@endsection
@section('style')
  <style type="text/css">
    .input-item{
      width: 200px;
      margin-left: 25px;
    }
    td{
      padding-top: 5px;
    }
    #items-list table tr td{
        padding: 5px;
    }
    #items{
        border-radius: 10px;
        border:solid 1px #cdcdcd;
        box-shadow: 3px 5px 5px 0 rgba(0, 0, 0, 0.2);
        width: 352px;
        padding: 10px;
    }

    .box {
        width: 150px;
        height: 150px;
        border:solid 1px black;
        background-color:#00b3ee;
        text-align: center;
    }
    .text {
        margin-top: 30px;
        color: #fff;
        text-align: center;
        font-size: 18px;
        letter-spacing: 1px;
    }
    .opac {
        opacity: .8;
    }
    .move-cursor {
        cursor: move;
    }
    .grab-cursor {
        cursor: -webkit-grabbing;
    }

    .form{
        width: 59%;
        height: 100%;
        height-max: auto;
        float: left;
        display: block;
        margin-top: 10px;
    }
    .crud{
        float:right;
        display: none;
    }

    #items-ele:hover .crud{
          display: block;
      }
  </style>
@endsection
@section('content')
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
          <div style="margin-top: 10px">
              <div id="template-layout" style="width: 59%;height: 100%;height-max: auto;float: left;display: block;border:dotted 3px #cdcdcd;">
                  <div id="template"></div>
                  <div id="items" style="display: none;width: 100%">
                      <table>
                          <tr>
                              <td><label for="itemNum">Items Number:</label></td>
                              <td>
                                  <select id="itemNum" class="input-sm" style="background: whitesmoke;margin-left: 10px" onchange="changeNum()">
                                      <option selected="true" disabled="disabled" value="0">Chọn số lượng Items</option>
                                      <?php
                                      for($i=1;$i<=7;$i++){
                                          echo "<option value='".$i."'>".$i."<"."/option>";
                                      }
                                      ?>
                                  </select>
                              </td>
                          </tr>
                          <tr>
                              <td><label>Image Size:</label></td>
                              <td>
                                  <div id="imgSize" class="box">Kéo để chọn size</div>
                              </td>
                          </tr>
                      </table>
                      <div id="items-list"></div>
                      <button class="btn btn-success" type="button" id="btn-save-items" onclick="itemsBuilder()" style="margin: 15px 0px 0px 100px;">Save</button>
                      <button class="btn btn-danger" id="btn-close-items" onclick="hideView('items')" style="margin: 15px 0px 0px 15px">Close</button>
                  </div>
              </div>
              <div id="elements" style="width: 29%;float: right;">
                  <button class="btn btn-toolbar" type="button" id="btn-items" onclick="showView('items')">Items</button>
              </div>
          </div>
      </div>
      <!-- /.row -->
        <form action="{{route('template.store')}}" method="post" class="form">
            <input name="_token" type="hidden" value="{{{ csrf_token() }}}" />
            <lable>Tên Template: </lable>
            <input type="text" id="txtName" name="txtName" class="input-item" placeholder="Tên Template"/><br>
            <input type="text" id="txtData" name="txtData" style="display: none"/>
            <input type="text" id="txtTemplate" name="txtTemplate" style="display: none"/>
            <button class="btn btn-success" type="submit" onclick="saveTemplate()" style="margin: 15px 0px 0px 100px;">Lưu</button>
            <button class="btn btn-danger" type="button" onclick="clear()" style="margin: 15px 0px 0px 15px">Clear</button>
        </form>
    </div>
    <!-- /.container-fluid -->
  </div>
  <div class="field-actions">
      <a type="remove" id="del_frmb-1515378824375-fld-1" class="del-button btn icon-cancel delete-confirm" title="Remove Element"></a>
      <a type="edit" id="frmb-1515378824375-fld-1-edit" class="toggle-form btn icon-pencil" title="Edit"></a>
  </div>
  <!-- /#page-wrapper -->
@endsection

@section('script')
  <script type="text/javascript" language="JavaScript">
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

     //get data,template from element
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
             this.template_data=this.template_data+data;
             template.template_html=this.template_html+templateHTML+'<br>';
         }
     };

     function itemsBuilder(){
         var num = document.getElementById('itemNum').value;
         var data="";
         var imgSize='width:'+$("#imgSize").css("width")+';height:'+$("#imgSize").css("height")+';';
         var f = document.createDocumentFragment()
         var root= document.createElement('div');
         root.id="items-ele";
         root.class="ele-class";
         root.innerHTML = '<div class="crud"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-wrench"></span></button><button type="button" onclick="deleteEle()" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-remove"></span></button></div>';
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
             data=data+'{imgUrl:"'+document.getElementById(imgUrlId).value+'",linkClick:"'+document.getElementById(linkClickId).value+'",content:"'+document.getElementById(contentId).value+'"},';
         }
         var d= document.getElementById('template');
         root.appendChild(f);
         d.appendChild(root);
         hideView("items");
         var template_html='<div v-for="item in items"><a :href="item.linkClick"><img :src="item.imgUrl" style="'+imgSize+'"></a><span>'+'{'+'{'+'item.content'+'}'+'}'+'</span><br></div>';
         data='items:['+data+'],';
         template.set(data,template_html);
     }

     //save template to db
     function saveTemplate() {
         var tem_data='{'+template.getData()+'}';
         var txtData= document.getElementById('txtData');
         var txtTemplate= document.getElementById('txtTemplate');
         txtData.value=tem_data;
         txtTemplate.value=template.getTemplate();
     }


     function clear() {
         var items = document.getElementById("template");
         while (items.hasChildNodes()) {
             items.removeChild(items.firstChild);
         }
     }

     function deleteEle() {
         var items = document.getElementById("template");
          if (items.hasChildNodes()) {
             items.removeChild(items.childNodes.item(0));
         }
     }
  </script>
@endsection