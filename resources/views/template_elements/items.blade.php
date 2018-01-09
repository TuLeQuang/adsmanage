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
                  <div id="app"><div id="template"></div></div>
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
                  <div id="title" style="display: none;width: 100%">
                      <table>
                          <tr>
                              <td><label>Title:</label></td>
                              <td><input id="txtTitle" type="text" class="input-item"/></td>
                          </tr>
                      </table>
                      <div id="items-list"></div>
                      <button class="btn btn-success" type="button" id="btn-save-items" onclick="titleBuilder()" style="margin: 15px 0px 0px 100px;">Save</button>
                      <button class="btn btn-danger" id="btn-close-items" onclick="hideView('title')" style="margin: 15px 0px 0px 15px">Close</button>
                  </div>
              </div>
              <div id="elements" style="width: 29%;float: right;">
                  <button class="btn btn-toolbar" type="button" id="btn-items" onclick="showView('items')">Items</button>
                  <br>
                  <button class="btn btn-toolbar" type="button" id="btn-items" onclick="showView('title')">Title</button>
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
   {{-- <script src="{{ asset('js/app.js') }}"></script>--}}
  <script src="{{asset('/js/items.js')}}"></script>
  <script type="text/javascript" language="JavaScript">

  </script>
@endsection