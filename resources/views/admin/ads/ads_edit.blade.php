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
        <div id="erroMesg" style="display: inline-block">
          @if(count($errors) > 0)
            <div class="alert alert-danger">
              @foreach($errors->all() as $err)
                {{$err}}<br>
              @endforeach
            </div>
          @endif

          @if(session('success'))
            <div class="alert alert-success">
              {{session('success')}}
            </div>
          @endif

          @if(session('error'))
            <div class="alert alert-danger">
              {{session('error')}}
            </div>
          @endif
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
          $ads_data= json_decode($adsData,true);
          echo "var js_data = ".$ads_data['data'].";\n";
          echo "var js_template='".$template['template']."';\n";
          echo "var js_templateId='".$template['id']."';\n";
          echo "var js_config='".$template['config']."';\n";
          echo "var js_id='".$adsData['id']."';\n";
          echo "var js_adsName='".$adsData['name']."';\n";
          echo "var js_adsBrand='".$adsData['brand']."';\n";
          echo "var js_adsUserId='".$adsData['users_id']."';\n";
          echo "var js_userLogin='".Auth::user()->id."';\n";
          echo "var js_userLvLogin='".Auth::user()->level."';\n";
          echo "var js_adsCloneLink='".route('adsClone',[$adsData['id'],$template['id']])."';\n";
      ?>

      var ads_data=js_data;
      //console.log(tem_data);

      //render template
      var vm = new Vue({
          el:'#app',
          data() {
              return ads_data;
          },
          template:`<div style="display: inline-block;width:100%">
                     <button type="button" style="display: block" class="btn btn-info" data-toggle="modal" data-target="#myModal" id="btnModal">Change Image</button>
                     <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog" style="width: 600px">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                                 <h4 class="modal-title">Edit Image and Link click</h4>
                              </div>
                              <div class="modal-body">
                                 <span style="color: red" v-if="errors.any()">\{\{errors.all().join("*  ")\}\}</span>
                                 <table style="margin-top: 5px" v-for="(item, index) in items">
                                    <tr>
                                       <td><label>Image Url \{\{index+1\}\}: </label></td>
                                       <td><input id="txtImgUrl" type="text" class="form-control" name="Image Url" v-validate="{required:true,url:true}" v-model="item.image" style="margin-left: 15px;width: 460px"/></td>
                                    </tr>
                                    <tr>
                                       <td><label>Link Click \{\{index+1\}\} </label></td>
                                       <td><input id="txtLinkClick" type="text" v-model="item.link" name="Link click" v-validate="{url:true}" class="form-control" style="margin-left: 15px;width: 460px"/></td>
                                    </tr>
                                 </table>
                              </div>
                              <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
                           </div>
                        </div>
                     </div>

                     <div style="height: auto; display: inline-block;position: relative;float: left"><span style="color: red" v-if="errors.any()">\{\{errors.all().join("*  ")\}\}</span><?php echo ($adsData['users_id']!=Auth::user()->id)?$template['template']:$template['config']; ?></div>

                     <div id="ads" style="display:inline-block;margin-left: 50px;">
                        <form action="<?php echo route('ads.update',$adsData['id']) ?>" method="post">
                           <?php echo csrf_field()?>
                           <input name="_method" type="hidden" value="PUT"/><label style="color: red;display: none ;margin-left: 30px"  id="errorsMessages"></label>
                           <table>
                              <tr>
                                 <td><label for="">Ads Name: </label></td>
                                 <td><input type="text" id="ads_name" name="txtAdsName" class="input-item form-control" required></td>
                              </tr>
                              <tr>
                                 <td><label for="">Ads Brand: </label></td>
                                 <td><input type="text" id="ads_brand" name="txtAdsBrand" class="input-item form-control" required></td>
                              </tr>
                           </table>
                           <input type="text" id="ads_data" name="txtAdsData" style="display: none"><input type="submit" id="save-ads" @click="exportScript()" :disabled="errors.any()" class="btn btn-primary" value="Save Ads" style="margin-left: 130px;margin-top: 10px"/>
                        </form>
                        @if(Auth::user()->level==1 || Auth::user()->level==0)
                            <button id="clone-ads" @click="cloneAds()" class="btn btn-primary" style="margin-left: 130px;margin-top: 10px;display: none">Clone Ads</button>
                        @endif
                            <button @click="exportScript()" class="btn btn-primary" style="margin-left: 130px;margin-top: 10px;display: inline-block">Get Script</button>
                        </div>
                     </div>`,
          methods:{
              exportScript: function () {
                  var myJSON = JSON.stringify(ads_data);
                  document.getElementById('ads_data').value=myJSON;
                  document.getElementById('ads').textContent='<script src="http://template.localhost/js/drawTemplate.js"><\/script>'+
                                                                '<script src="http://template.localhost/js/vue.js"><\/script>'+
                                                                '<script>drawAds('+myJSON+','+js_templateId+');<\/script>';
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
          if(js_adsUserId!=js_userLogin &&js_userLvLogin!=1  || js_userLvLogin==2){
              document.getElementById('ads_name').disabled = true;
              document.getElementById('ads_brand').disabled = true;
              document.getElementById('btnModal').style.display = "none";
              document.getElementById('save-ads').style.display = "none";
              document.getElementById('clone-ads').style.display = "block";
          }
          else if(js_adsUserId==js_userLogin){
              document.getElementById('ads_name').disabled = false;
              document.getElementById('ads_brand').disabled = false;
              document.getElementById('btnModal').style.display = "block";
              document.getElementById('save-ads').style.display = "block";
              document.getElementById('clone-ads').style.display = "none";
          }
          else if(js_userLvLogin==1 && js_adsUserId!=js_userLogin ){
              document.getElementById('ads_name').disabled = false;
              document.getElementById('ads_brand').disabled = false;
              document.getElementById('btnModal').style.display = "block";
              document.getElementById('save-ads').style.display = "block";
              document.getElementById('clone-ads').style.display = "block";
          }
      })();
  </script>
@endsection
