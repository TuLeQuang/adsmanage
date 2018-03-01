@extends('admin.layout.index')
@section('title')
  <title>Ads Edit</title>
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
          <h1 class="page-header">Ads <small>Edit</small> </h1>
        </div>
        <div id="app"></div>

        {{--<div id="ads" style="float: right;width: 67%;word-wrap: break-word;padding-top: 10px"></div>--}}
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
          $ads_data= json_decode($adsData,true);
          echo "var js_data = ".$ads_data['data'].";\n";
          echo "var js_template='".$template['template']."';\n";
          echo "var js_config='".$template['config']."';\n";
          echo "var js_id='".$adsData['id']."';\n";
          echo "var js_adsName='".$adsData['name']."';\n";
          echo "var js_adsBrand='".$adsData['brand']."';\n";
          echo "var js_adsUserId='".$adsData['users_id']."';\n";
          echo "var js_userLogin='".Auth::user()->id."';\n";
          echo "var js_adsRoute='".route('ads.update',$adsData['id'])."';\n";
          echo "var js_adsToken='". csrf_field()."';\n";
          echo "var js_adsCloneLink='".route('adsClone',[$adsData['id'],$template['id']])."';\n";
      ?>

      var ads_data=js_data;
      //console.log(tem_data);
      var div_script= '<div id="script-text" style="display: block;float: left; position: absolute;left: 475px;top: 0px;"><button type="button" @click="exportScript()" :disabled="errors.any()" class="btn btn-primary">Get Script</button><p id ="script"></p></div>';
      var ads_template="";
      if(js_adsUserId!=js_userLogin)
          ads_template=js_template;
      else
          ads_template=js_config;

      //render template
      var vm = new Vue({
          el:'#app',
          data() {
              return ads_data;
          },
          template:'<div style="display: inline-block;width:100%">'
          +'<button type="button" style="display: block" class="btn btn-info" data-toggle="modal" data-target="#myModal" id="btnModal">Change Image</button><div class="modal fade" id="myModal" role="dialog"><div class="modal-dialog" style="width: 600px"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">Edit Image and Link click</h4></div><div class="modal-body"><span style="color: red" v-if="errors.any()">{'+'{'+' errors.all().join("*  ")'+'}'+'}</span><table style="margin-top: 5px" v-for="(item, index) in items"><tr><td><label>Image Url '+'\{\{index+1\}\}'+': </label></td><td><input id="txtImgUrl" type="text" class="form-control" name="Image Url" v-validate="{required:true,url:true}" v-model="item.image" style="margin-left: 15px;width: 460px"/></td></tr><tr><td><label>Link Click '+'\{\{index+1\}\}'+': </label></td><td><input id="txtLinkClick" type="text" v-model="item.link" name="Link click" v-validate="{url:true}" class="form-control" style="margin-left: 15px;width: 460px"/></td></tr></table></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div>'
          +'<div style="height: auto; display: inline-block;position: relative;float: left"><span style="color: red" v-if="errors.any()">{'+'{'+' errors.all().join("*  ")'+'}'+'}</span>'+ads_template+'</div>'
          +'<div id="ads" style="display:inline-block;margin-left: 50px;"><form action="'+js_adsRoute+'" method="post">'+js_adsToken+'<input name="_method" type="hidden" value="PUT"/><label style="color: red;display: none ;margin-left: 30px"  id="errorsMessages"></label><table><tr><td><label for="">Ads Name: </label></td><td><input type="text" id="ads_name" name="txtAdsName" class="input-item form-control" required></td></tr><tr><td><label for="">Ads Brand: </label></td><td><input type="text" id="ads_brand" name="txtAdsBrand" class="input-item form-control" required></td></tr></table><input type="text" id="ads_data" name="txtAdsData" style="display: none"><input type="submit" id="save-ads" @click="exportScript()" :disabled="errors.any()" class="btn btn-primary" value="Save Ads" style="margin-left: 130px;margin-top: 10px"/></form><button id="clone-ads" @click="cloneAds()" class="btn btn-primary" style="margin-left: 130px;margin-top: 10px;display: none">Clone Ads</button></div>'
          +'</div>',
          methods:{
              exportScript: function () {
                  var myJSON = JSON.stringify(ads_data);
                  document.getElementById('ads_data').value=myJSON;
              },
              cloneAds: function () {
                  if(js_adsUserId!=js_userLogin){
                      window.location.href =js_adsCloneLink;
                  }

              }
          },
      });
      document.getElementById('ads_name').value=js_adsName;
      document.getElementById('ads_brand').value=js_adsBrand;

      (function checkUser() {
          if(js_adsUserId!=js_userLogin){
              document.getElementById('ads_name').disabled = true;
              document.getElementById('ads_brand').disabled = true;
              document.getElementById('btnModal').style.display = "none";
              document.getElementById('save-ads').style.display = "none";
              document.getElementById('clone-ads').style.display = "block";
          }
      })();
  </script>
@endsection
