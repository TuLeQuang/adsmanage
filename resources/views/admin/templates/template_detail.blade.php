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

        <div id="app">
        </div>

      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->
@endsection

@section('script')
{{--  <script src="{{ asset('js/app.js') }}"></script>--}}
  <script src="/templatemanager/node_modules/vee-validate/dist/vee-validate.js"></script>
  <script src="/templatemanager/node_modules/vue/dist/vue.js"></script>

  <script src="/templatemanager/node_modules/vue-medium/dist/index.js"></script>

  <script src="/templatemanager/node_modules/medium-editor/dist/js/medium-editor.js"></script>
  <script type="text/javascript">
      //vue validate
      Vue.use(VeeValidate);
      Vue.use(VueMedium);

      //get data and template form db
          <?php
          $tem_data= json_decode($temData,true);
          echo "var js_data = ".$tem_data['data'].";\n";
          echo "var js_template='".$temData['template']."';\n";
          ?>
      var tem_data=js_data;
      var div_script= '<div id="script-text" style="margin-top: 10px;display: block"><button type="button" @click="exportScript()" :disabled="errors.any()" class="btn btn-primary">layscript</button>Scrip:<p id ="script"></p></div>';

      //contentEditable
    /*  Vue.component('editable',{
          template:'<div contenteditable="true" @input="update"></div>',
          props:['content'],
          mounted:function(){
              this.$el.innerText = this.content;
          },
          methods:{
              update:function(event){
                  this.$emit('update',event.target.innerText);
              }
          },
      });*/

      //render template
      var vm = new Vue({
          el:'#app',
          data() {
              return tem_data;
          },
          template:'<div>'
          +'<button type="button" style="display: block" class="btn btn-info" data-toggle="modal" data-target="#myModal">Edit Image</button><div class="modal fade" id="myModal" role="dialog"><div class="modal-dialog" style="width: 300px"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">Edit Image and Link click</h4></div><div class="modal-body"><span style="color: red" v-if="errors.any()">{'+'{'+' errors.all().join("*  ")'+'}'+'}</span><table style="margin-top: 5px" v-for="item in items"><tr><td><label>Image Url: </label></td><td><input id="txtImgUrl" type="text" class="form-control" name="Image Url" v-validate="{required:true,url:true}" v-model="item.imgUrl"/></td></tr><tr><td><label>Link Click: </label></td><td><input id="txtLinkClick" type="text" v-model="item.linkClick" name="Link click" v-validate="{url:true}" class="form-control"/></td></tr></table></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div>'
          +'<div style="height: auto; display: inline-block;"><span style="color: red" v-if="errors.any()">{'+'{'+' errors.all().join("*  ")'+'}'+'}</span>'+js_template+div_script+'</div>'
          +'</div>',
          methods:{
              exportScript: function () {
                  var myJSON = JSON.stringify(tem_data);
                  document.getElementById('script').innerHTML= myJSON;
              },
          },
      });
  </script>

@endsection
