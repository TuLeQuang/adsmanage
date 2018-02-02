@extends('admin.layout.index')
@section('title')
  <title>Create Template Element v2</title>
  <link href="{{asset('css/jquery-ui/jquery-ui.css')}}" rel="stylesheet">
  <link href="{{asset('css/jquery-ui/jquery-ui.theme.css')}}" rel="stylesheet">
@endsection

@section('style')
  <style>
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
    .mau-template{
        width: 150px;height: 150px;background-size: cover;margin-left: 25px;
    }
  </style>
@endsection

@section('content')
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div style="margin-top: 10px">
          <form action="{{route('template.store')}}" method="post" class="form">
            <label style="color: red" disabled="true" id="errorsMessages"> </label>
            <input name="_token" type="hidden" value="{{{ csrf_token() }}}" />
            <table>
              <tr><td><input type="text" id="txtName" name="txtName" class="input-item form-control" placeholder="Tên Template" required/></td></tr>
              <tr><td><input type="number" id="txtWidth" class="input-item form-control" placeholder="Width px" onchange="templateChange()" required/></td></tr>
              <tr><td><input type="number" id="txtHeight" class="input-item form-control" placeholder="Height px" onchange="templateChange()"/></td></tr>
            </table>
            <input type="text" id="txtData" name="txtData" style="display: none "/>
            <input type="text" id="txtTemplate" name="txtTemplate" style="display: none "/>
            <input class="btn btn-success" type="submit" value="Save" onclick="saveTemplate()" style="margin: 15px 0px 0px 60px;"/>
            <button class="btn btn-danger" type="button" onclick="clear()" style="margin: 15px 0px 0px 15px">Clear</button>
          </form>

          <div id="template-layout">
            <div id="template" style="border: solid 1px #cdcdcd;min-width: 100px ;"></div>
            @include('.template_elements.item')
            @include('.template_elements.title')
            @include('template_elements.sponsor')
            @include('template_elements.image')
          </div>
          <div>
            @if(count($errors) > 0) 
              <div class="alert alert-danger">
                  @foreach($errors->all() as $err)
                      {{$err}}<br>
                  @endforeach
              </div>
          @endif
          </div>
          <div id="btn-elements" style="width: 29%;float: right;">
            <button class="btn btn-toolbar" type="button" id="btn-title" onclick="showTitleConfig()">Title</button>
            <br>
            <button class="btn btn-toolbar btn-element" type="button" id="btn-items" onclick="showItemsConfig()">Items</button>
            <br>
            <button class="btn btn-toolbar btn-element" type="button" id="btn-image" onclick="showImageConfig()">Image</button>
            <br>
            <button class="btn btn-toolbar btn-element" type="button" id="btn-logo" onclick="showSponsorConfig()">Sponsor</button>
            <br>
            <button type="button" class="btn btn-toolbar" data-toggle="modal" data-target="#myModal">Chọn mẫu</button>
          </div>

        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  {{--<div class="field-actions">
    <a type="remove" id="del_frmb-1515378824375-fld-1" class="del-button btn icon-cancel delete-confirm" title="Remove Element"></a>
    <a type="edit" id="frmb-1515378824375-fld-1-edit" class="toggle-form btn icon-pencil" title="Edit"></a>
  </div>--}}
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

      $("div.alert").delay(3000).slideUp();

      $(window).on('load',function(){
        $('#myModal').modal('show');
      });
      $('#myModal').modal({
        backdrop: 'static',
        keyboard: true
      })
      
  </script>
@endsection
