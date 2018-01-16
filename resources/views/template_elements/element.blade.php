@extends('admin.layout.index')
@section('title')
  <title>Create Template Element v2</title>
  <link href="css/jquery-ui/jquery-ui.css" rel="stylesheet">
  <link href="css/jquery-ui/jquery-ui.theme.css" rel="stylesheet">
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
    #items, #title{
      border-radius: 10px;
      border:solid 1px #cdcdcd;
      box-shadow: 3px 5px 5px 0 rgba(0, 0, 0, 0.2);
      width: 352px;
      padding: 10px;
      margin-top: 5px;
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
      margin-left: 510px;
      position: absolute;
    }

    .items-class:hover .crud{
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
            <div id="template">
            </div>
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
                  <td><label for="required">Img Url Required: </label></td>
                  <td><input type="checkbox" id="itemsRequired" style="margin-left: 10px" ></td>
                  <td><label for="Content">Content max lenght: </label></td>
                  <td><input type="number" style="width: 50px" value="20" id="contentLenght" ></td>
                </tr>
                <tr>
                  <td><label>Image Size:</label></td>
                  <td><div id="imgSize" class="box">Kéo để chọn size</div></td>
                </tr>
              </table>
              <div id="items-list"></div>
              <button class="btn btn-danger" id="btn-close-items" onclick="hideView('items')" style="margin: 15px 0px 0px 15px">Close</button>
            </div>
            <div id="title" style="display: none;width: 100%">
              <table>
                <tr>
                  <td><label>Title:</label></td>
                  <td><input id="txtTitle" type="text" class="input-item" /></td>
                </tr>
                <tr>
                  <td><label for="titleRequired">Required: </label></td>
                  <td><input type="checkbox" id="titleRequired" style="margin-left: 10px"></td>
                  <td><label for="titleLenght">Title max lenght: </label></td>
                  <td><input type="number" style="width: 50px" value="20" id="titleLenght"></td>
                </tr>
                <tr>
                  <td>Titlecolor:</td>
                  <td><input type="color" id="titleColor" value="#000000" name="titleColor"></td>
                </tr>
                <tr>
                  <td>Fontsize:</td>
                  <td class="range-slider">
                    <input id="titleFontRange" class="input-range" type="range" min="10" max="50" step="1" value="10" style="width:100px;display: inline-block;" name="titleFont" />
                    <input type="text" class="range-value" id="titleFontText" style="width:30px"/><span>px</span>
                  </td>
                </tr>
              </table>
              <div id="items-list"></div>
              <button class="btn btn-danger" id="btn-close-items" onclick="hideView('title')" style="margin: 15px 0px 0px 15px">Close</button>
            </div>
          </div>

          <div id="btn-elements" style="width: 29%;float: right;">
            <button class="btn btn-toolbar" type="button" id="btn-items" onclick="showItemsConfig()">Items</button>
            <br>
            <button class="btn btn-toolbar" type="button" id="btn-items" onclick="showTitleConfig()">Title</button>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <form action="{{route('template.store')}}" method="post" class="form">
        <input name="_token" type="hidden" value="{{{ csrf_token() }}}" />
        <lable>Tên Template: </lable>
        <input type="text" id="txtName" name="txtName" class="input-item" placeholder="Tên Template"/><br>
        <input type="text" id="txtData" name="txtData" style="display: none "/>
        <input type="text" id="txtTemplate" name="txtTemplate" style="display: none "/>
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
  <script src="{{asset('/js/elements.js')}}"></script>
  <script src="{{asset('/js/jquery-ui.js')}}"></script>
  <script type="text/javascript" language="JavaScript">
      //Drag Img
      grid_size = 10;
      $(".box").resizable({ grid: grid_size * 2 })
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

      //range and text
       range = $('.range-slider > .input-range');
      value = $('.range-slider > .range-value');

      value.val(range.attr('value'));

      range.on('input', function(){
          //monparent=$(this).parent();
          monparent=this.parentNode;

          value=$(monparent).find('.range-value');
          $(value).val(this.value);
      });

      value.on('input', function(){
          monparent=this.parentNode;
          range=$(monparent).find('.input-range');
          $(range).val(this.value);

      });

  </script>
@endsection
