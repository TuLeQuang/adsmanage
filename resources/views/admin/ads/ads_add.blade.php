@extends('admin.layout.index')
@section('title')
  <title>Ads Add</title>
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
          <h1 class="page-header">Ads <small>Add</small> </h1>
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
       {{-- <div id="ads" style="float: right;width: 67%;word-wrap: break-word;padding-top: 10px">
          <form action="{{route('ads.store')}}" method="post">
            <label style="color: red;display: none ;margin-left: 30px"  id="errorsMessages"> </label>
            <input name="_token" type="hidden" value="{{{ csrf_token() }}}" />
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
            <input type="text" id="ads_data" name="txtAdsData" style="display: none">
            <input type="text" id="template_id" name="txtTemplateId" style="display: none">
            <button type="submit" id="save-ads" @click="exportScript()" :disabled="errors.any()" class="btn btn-primary" style="margin-left: 130px;margin-top: 10px" >Save Ads</button>
          </form>
        </div>--}}
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
            echo "var js_template='".$temData['template']."';\n";
            echo "var js_config='".$temData['config']."';\n";
            echo "var js_id='".$temData['id']."';\n";
            echo "var js_adsToken='". csrf_field()."';\n";
            if(isset($adsData))
              echo "var js_data = ".$adsData.";\n";
            else
              echo "var js_data = ".$temData['data'].";\n";
          ?>

      var tem_data=js_data;
      //console.log(tem_data);

      //render template
      var vm = new Vue({
          el:'#app',
          data() {
              return tem_data;
          },
          template:`<div style="display: inline-block;width:100%">
                       <button type="button" style="display: block" class="btn btn-info" data-toggle="modal" data-target="#myModal">Change Image</button>
                       <div class="modal fade" id="myModal" role="dialog">
                          <div class="modal-dialog" style="width: 300px">
                             <div class="modal-content">
                                <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                                   <h4 class="modal-title">Edit Image and Link click</h4>
                                </div>
                                <div class="modal-body">
                                   <span style="color: red" v-if="errors.any()">\{\{ errors.all().join("*  ") \}\}</span>
                                   <table style="margin-top: 5px" v-for="item in items">
                                      <tr>
                                         <td><label>Image Url: </label></td>
                                         <td><input id="txtImgUrl" type="text" class="form-control" name="Image Url" v-validate="{required:true,url:true}" v-model="item.image"/></td>
                                      </tr>
                                      <tr>
                                         <td><label>Link Click: </label></td>
                                         <td><input id="txtLinkClick" type="text" v-model="item.link" name="Link click" v-validate="{url:true}" class="form-control"/></td>
                                      </tr>
                                   </table>
                                </div>
                                <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
                             </div>
                          </div>
                       </div>
                       <div style="height: auto; display: inline-block;position: relative;float: left">
                          <span style="color: red" v-if="errors.any()">\{\{ errors.all().join("*  ") \}\}</span>
                          <?php echo $temData['config']?>
                          <div id="save-ads" style="display: none;float: left; position: absolute;left: 475px;top: 0px;">
                            <button type="button" @click="exportScript()" :disabled="errors.any()" class="btn btn-primary">Save Ads</button>
                            <p id ="script"></p>
                          </div>
                       </div>
                       <div id="ads" style="display:inline-block;margin-left: 50px;">
                           <form action="<?php echo route('ads.store') ?>" method="post">
                              <?php echo csrf_field()?>
                              <label style="color: red;display: none ;margin-left: 30px"  id="errorsMessages"> </label>
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
                              <input type="text" id="ads_data" name="txtAdsData" style="display: none"><input type="text" id="template_id" name="txtTemplateId" style="display: none"><button type="submit" id="save-ads" @click="exportScript()" :disabled="errors.any()" class="btn btn-primary" style="margin-left: 130px;margin-top: 10px">Save Ads</button>
                           </form>
                       </div>
                    </div>`,
          methods:{
              exportScript: function () {
                  var myJSON = JSON.stringify(tem_data);
                  document.getElementById('ads_data').value=myJSON;
                  document.getElementById('template_id').value=js_id;
              },
          },
      });

      //erro mes
      $("div.alert").delay(2000).slideUp();
  </script>
@endsection
