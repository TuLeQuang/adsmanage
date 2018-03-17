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
      //console.log(tem_data);

      //render template
      var vm = new Vue({
          el:'#app',
          data() {
              return js_data;
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

                     <div id="ads" style="display:inline-block;margin-left: 50px;position: absolute;">
                        <form action="<?php echo route('ads.update',$adsData['id']) ?>" method="post">
                           <?php echo csrf_field()?>
                           <input name="_method" type="hidden" value="PUT"/><label style="color: red;display: none ;margin-left: 30px"  id="errorsMessages"></label>
                           <table>
                              <tr>
                                 <td><label for="">Ads Name: </label></td>
                                 <td><input type="text" id="ads_name" name="txtAdsName" class="input-item form-control" value="{{$adsData['name']}}" required></td>
                              </tr>
                              <tr>
                                 <td><label for="">Ads Brand: </label></td>
                                 <td><input type="text" id="ads_brand" name="txtAdsBrand" class="input-item form-control" value="{{$adsData['brand']}}" required></td>
                              </tr>
                              <tr>
                                 <td><label for="">Created At: </label></td>
                                 <td><input type="text" id="ads_createdAt" class="input-item form-control" value="{{$adsData['created_at']}}" readonly></td>
                              </tr>
                              <tr>
                                 <td><label for="">Update At: </label></td>
                                 <td><input type="text" id="ads_updatedAt" class="input-item form-control" value="{{$adsData['updated_at']}}" readonly></td>
                              </tr>
                           </table>
                           <input type="text" id="ads_data" name="txtAdsData" style="display: none">
                           <input type="submit" id="save-ads" @click="editAds()" :disabled="errors.any()" class="btn btn-primary" value="Edit Ads" style="margin-top: 10px"/>
                        </form>
                        @if(Auth::user()->level==1 || Auth::user()->level==0)
                            <button id="clone-ads" @click="cloneAds()" class="btn btn-primary" style="margin-top: 10px;display: none; position: absolute;bottom: 0px;left: 100px;">Clone Ads</button>
                        @endif
                            <button @click="exportScript()" class="btn btn-primary" style="margin-top: 10px;display: inline-block;bottom: 0px;right: 0px;position: absolute">Get Script</button>
                        <div id="listLink" style="bottom: -130px;position: absolute;width:850px;">
                            @if(isset($adsLinks) && count($adsLinks)!=0)
                              <table class="table table-striped table-bordered table-hover" >
                                <thead>
                                  <tr align="center" >
                                    <th style="text-align: center;">Stt</th>
                                    <th style="text-align: center;">Link Name</th>
                                    <th style="text-align: center;">Link</th>
                                    <th style="text-align: center;">Create At</th>
                                    @if(Auth::user()->level==1 || $adsData['user_id'] == Auth::user()->id )
                                      <th style="text-align: center;">Action</th>
                                    @endif
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach($adsLinks as $index=> $adsLink)
                                  <tr class="odd gradeX" align="center">
                                    <td >{{$index +1}}</td>
                                    <td>{{$adsLink->linkName}}</td>
                                    <td><a href="{{$adsLink->link}}" target="__blank">{{$adsLink->link}}</a></td>
                                    <td>{{$adsLink->create_at}}</td>
                                    @if(Auth::user()->level==1 || $adsData['user_id'] == Auth::user()->id )
                                    <td class="center">
                                      <form action="{{route('link.destroy',$adsLink->linkId)}}" method="POST">
                                        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="button-delete" onclick="return xacnhan('Bạn có chắc chắn muốn xóa hay không ?')" title="Delete">
                                          <i class="fa fa-trash-o fa-fw"></i>Delete
                                        </button>
                                    @endif
                                      </form>
                                    </td>
                                  </tr>
                                @endforeach
                                </tbody>
                              </table>
                            @endif
                        </div>
                     </div>
                     <textarea id="script" readonly style="display:none;width:500px;margin-left:20px;word-break:break-word;float:right;height:160px;" class="form-control"></textarea >
                    </div>`,
          methods:{
              exportScript: function () {
                  var myJSON = JSON.stringify(js_data);
                  var url=location.protocol+location.port+'//'+location.hostname+'/';
                  document.getElementById('script').style.display="inline-block";
                  $('#script').val('<script src="'+url+'js/drawTemplate.js"><\/script><script  src="'+url+'js/vue.js"><\/script><script>drawAds('+myJSON+','+js_id+');<\/script>');
              },
              editAds:function () {
                  var myJSON = JSON.stringify(js_data);
                  document.getElementById('ads_data').value=myJSON;
              },
              cloneAds: function () {
                  if(js_adsUserId!=js_userLogin){
                      window.location.href =js_adsCloneLink;
                  }
              }
          },
      });

      (function checkUser() {
          if(js_adsUserId!=js_userLogin &&js_userLvLogin!=1  || js_userLvLogin==2){
              document.getElementById('ads_name').disabled = true;
              document.getElementById('ads_brand').disabled = true;
              document.getElementById('btnModal').style.display = "none";
              document.getElementById('save-ads').style.display = "none";
              document.getElementById('clone-ads').style.display = "inline-block";
          }
          else if(js_adsUserId==js_userLogin){
              document.getElementById('ads_name').disabled = false;
              document.getElementById('ads_brand').disabled = false;
              document.getElementById('btnModal').style.display = "block";
              document.getElementById('save-ads').style.display = "inline-block";
              document.getElementById('clone-ads').style.display = "none";
          }
          else if(js_userLvLogin==1 && js_adsUserId!=js_userLogin ){
              document.getElementById('ads_name').disabled = false;
              document.getElementById('ads_brand').disabled = false;
              document.getElementById('btnModal').style.display = "block";
              document.getElementById('save-ads').style.display = "inline-block";
              document.getElementById('clone-ads').style.display = "inline-block";
          }
      })();

      function xacnhan(msg)
      {
          if(window.confirm(msg))
          {
              return true;
          }
          return false;
      }

      $("div.alert").delay(2000).slideUp();
  </script>
@endsection
