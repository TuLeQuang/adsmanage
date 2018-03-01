@extends('admin.layout.index')
@section('title')
  <title>Template Detail</title>
  <meta id="csrf-token" name="csrf-token" value="{{ csrf_token() }}">
   {{-- <link href="/templatemanager/node_modules/medium-editor/dist/css/medium-editor.css" rel="stylesheet">--}}
@endsection
@section('style')
  <style type="text/css">

  </style>
@endsection
@section('content')
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-12">
          <h1 class="page-header">Template <small>Detail</small> </h1>
        </div>
        <div id="app"></div>

        <div id="ads" style="float: right;width: 67%;word-wrap: break-word;padding-top: 10px"></div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->
@endsection

@section('script')
{{--  <script src="{{ asset('js/app.js') }}"></script>--}}
  <script src="{{asset('js/vee-validate.js')}}"></script>
  <script src="{{asset('js/vue.js')}}"></script>
  <script src="{{asset('js/index.js')}}"></script>
  <script type="text/javascript">
      //vue validate
      Vue.use(VeeValidate);
      Vue.use(VueMedium);

      //get data and template form db
          <?php
          $tem_data= json_decode($temData,true);
          echo "var js_data = ".$tem_data['data'].";\n";
          echo "var js_template='".$temData['template']."';\n";
          echo "var js_config='".$temData['config']."';\n";
          echo "var js_id='".$temData['id']."';\n";
          ?>

      var tem_data=js_data;
      //console.log(tem_data);
      var div_script= '<div id="script-text" style="display: block;float: left; position: absolute;left: 475px;top: 0px;"><button type="button" @click="exportScript()" :disabled="errors.any()" class="btn btn-primary">Get Script</button><p id ="script"></p></div>';

      //render template
      var vm = new Vue({
          el:'#app',
          data() {
              return tem_data;
          },
          template:'<div>'
          +'<button type="button" style="display: none;margin-left: 20px" class="btn btn-info" data-toggle="modal" data-target="#myModal">Change Image</button><div class="modal fade" id="myModal" role="dialog"><div class="modal-dialog" style="width: 300px"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">Edit Image and Link click</h4></div><div class="modal-body"><span style="color: red" v-if="errors.any()">{'+'{'+' errors.all().join("*  ")'+'}'+'}</span><table style="margin-top: 5px" v-for="item in items"><tr><td><label>Image Url: </label></td><td><input id="txtImgUrl" type="text" class="form-control" name="Image Url" v-validate="{required:true,url:true}" v-model="item.image"/></td></tr><tr><td><label>Link Click: </label></td><td><input id="txtLinkClick" type="text" v-model="item.link" name="Link click" v-validate="{url:true}" class="form-control"/></td></tr></table></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div>'
          +'<div style="height: auto; display: inline-block;position: relative;float: left"><span style="color: red" v-if="errors.any()">{'+'{'+' errors.all().join("*  ")'+'}'+'}</span>'+js_template+'</div>'
          +'</div>',
          methods:{
              exportScript: function () {
                  var myJSON = JSON.stringify(tem_data);
                  var template= js_template;
                  document.getElementById('ads').innerHTML=myJSON;/*'&lt;script>var data='+myJSON+'&lt;/script>'+
                                                            '&lt;script src="http://localhost/templatemanager/public/js/drawTemplate.js">&lt;/script>' +
                                                            '&lt;script src="http://localhost/templatemanager/node_modules/vue/dist/vue.js">&lt;/script>'+
                                                            '&lt;script>drawAds(data,'+ js_id+')&lt;/script>';*/
              },
          },
      });
  </script>
@endsection
