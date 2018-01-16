@extends('admin.layout.index')
@section('title')
  <title>Template Detail</title>
  <meta id="csrf-token" name="csrf-token" value="{{ csrf_token() }}">
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
          <h1 class="page-header">Template Detail</h1>
        </div>
        <div id="app" style=" margin: 100px 0px 0px 0px;">
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->

@endsection

@section('script')
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://vuejs.org/js/vue.js"></script>
  <script src="/templatemanager/node_modules/vee-validate/dist/vee-validate.js"></script>
  <script src="{{asset('js/medium.patched.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/mediumDerective.coffee')}}" type="text/coffeescript"></script>
  <script type="text/javascript">
      //vue validate
      Vue.use(VeeValidate);

      //get data and template form db
          <?php
          $tem_data= json_decode($temData,true);
          echo "var js_data = ".$tem_data['data'].";\n";
          echo "var js_template='".$temData['template']."';\n";
          ?>
      var tem_data=js_data;
      var div_script= '<div id="script-text" style="display: block;"><button type="button" @click="exportScript()" class="btn btn-primary">layscript</button>Scrip:<p id ="script"></p></div>';

      //contentEditable
      Vue.component('editable',{
          template:'<div contenteditable="true" @input="update" ></div>',
          props:['content'],
          mounted:function(){
              this.$el.innerText = this.content;
          },
          methods:{
              update:function(event){
                  this.$emit('update',event.target.innerText);
              }
          },
      });

      //render template
      var vm = new Vue({
          el:'#app',
          data() {
              return tem_data;
          },
          directives: {
              medium: mediumDirective
          },
          template: '<div><span style="color: red" v-if="errors.any()">{'+'{'+' errors.all().join("*  ")'+'}'+'}</span><br>'+js_template+div_script+'</div>',
          methods:{
              exportScript: function () {
                  var myJSON = JSON.stringify(tem_data);
                  document.getElementById('script').innerHTML= myJSON;
              },
          },
      });


  </script>
@endsection
