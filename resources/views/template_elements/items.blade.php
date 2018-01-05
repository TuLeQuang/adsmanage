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
  </style>
@endsection
@section('content')
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div style="margin-top: 10px">
          <div id="template-layout" style="width: 59%;float: left;display: block">
            <div id="template"></div>
            <div id="items" style="display: none">
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
              </table>
              <div id="items-list">
              </div>
              <button class="btn btn-success" type="button" id="btn-save-items" onclick="saveItems()" style="margin: 15px 0px 0px 100px;">Save</button>
              <button class="btn btn-danger" id="btn-close-items" onclick="hideView('items')" style="margin: 15px 0px 0px 15px">Close</button>
            </div>
          </div>
          <div id="elements" style="width: 29%;float: right;">
            <button class="btn btn-toolbar" type="button" id="btn-items" onclick="showView('items')">Items</button>
          </div>
        </div>
        <form action="{{route('template.store')}}" method="post">
            <input name="_token" type="hidden" value="{{{ csrf_token() }}}" />
            <input type="text" id="txtName" name="txtName" class="input-item" placeholder="Tên Template"/><br>
            <input type="text" id="txtData" name="txtData" style="display: none"/>
            <input type="text" id="txtTemplate" name="txtTemplate" style="display: none"/>
            <button class="btn btn-success" type="submit" style="margin: 15px 0px 0px 100px;">Lưu</button>
            <button class="btn btn-danger" onclick="clear()" style="margin: 15px 0px 0px 15px">Clear</button>
        </form>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->
@endsection

@section('script')
  <script>
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

     function showView(viewId) {
         var a= document.getElementById(viewId);
         a.style.display='block';
     }
     function hideView(viewId) {
         var a= document.getElementById(viewId);
         a.style.display='none';
     }
     function saveItems() {
         var num = document.getElementById('itemNum').value;
         var data="";
         for(var i=1,f = document.createDocumentFragment();i<=num;i++){
             var imgUrlId='imgUrl'+i;
             var linkClickId='linkClick'+i;
             var contentId='content'+i;
             var img=document.createElement('img');
             var a=document.createElement('a');
             var content=document.createElement('span');
             img.src=document.getElementById(imgUrlId).value;
             content.textContent=document.getElementById(contentId).value;
             a.href=document.getElementById(linkClickId).value;
             f.appendChild(a);
             a.appendChild(img);
             f.appendChild(content);
             f.appendChild(document.createElement('br'));
             data=data+'{imgUrl:"'+document.getElementById(imgUrlId).value+'",linkClick:"'+document.getElementById(linkClickId).value+'",content:"'+document.getElementById(contentId).value+'"},';
         }
         var d= document.getElementById('template');
         d.appendChild(f);
         data='{items:['+data+'],}';
         var template='<div v-for="item in items"><a :href="item.linkClick"><img :src="item.imgUrl"></a><span>'+'{'+'{'+'item.content'+'}'+'}'+'</span><br></div>';
         var txtData= document.getElementById('txtData');
         var txtTemplate= document.getElementById('txtTemplate');
         txtData.value=data;
         txtTemplate.value=template;
         hideView('items');
     }

     function clear() {
         document.getElementById('template').innerHTML="";
     }
  </script>
@endsection