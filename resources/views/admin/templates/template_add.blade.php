@extends('admin.layout.index')
@section('title')
  <title>Create Template Element v2</title>
  <link href="{{asset('css/jquery-ui/jquery-ui.css')}}" rel="stylesheet">
  <link href="{{asset('css/jquery-ui/jquery-ui.theme.css')}}" rel="stylesheet">
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
    #items, #title, #sponsor, #image{
      border-radius: 10px;
      border:solid 1px #cdcdcd;
      box-shadow: 3px 5px 5px 0 rgba(0, 0, 0, 0.2);
      width: 352px;
      padding: 10px;
      margin-top: 5px;
    }

    .box {
      max-width: 500px;
      max-height:500px;
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

    .items-class:hover .crud,.title-class:hover .crud,.sponsor-class:hover .crud,.image-class:hover .crud{
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
          <div id="template-layout">
            <div id="template" style="border: solid 1px #cdcdcd;">
            </div>
            @include('.template_elements.item')
            @include('.template_elements.title')
            @include('template_elements.sponsor')
            @include('template_elements.image')
          </div>

          <div id="btn-elements" style="width: 29%;float: right;">
            <button class="btn btn-toolbar" type="button" id="btn-title" onclick="showTitleConfig()">Title</button>
            <br>
            <button class="btn btn-toolbar" type="button" id="btn-items" onclick="showItemsConfig()">Items</button>
            <br>
            <button class="btn btn-toolbar" type="button" id="btn-image" onclick="showImageConfig()">Image</button>
            <br>
            <button class="btn btn-toolbar" type="button" id="btn-logo" onclick="showSponsorConfig()">Sponsor</button>
            <br>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <form action="{{route('template.store')}}" method="post" class="form">
        <input name="_token" type="hidden" value="{{{ csrf_token() }}}" />
        <table>
            <tr><td><input type="text" id="txtName" name="txtName" class="input-item" placeholder="Tên Template" required/></td></tr>
            <tr><td><input type="number" id="txtWidth" class="input-item" placeholder="width" onchange="templateChange()"/> px</td></tr>
        </table>

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
