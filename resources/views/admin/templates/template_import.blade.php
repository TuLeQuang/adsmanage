@extends('admin.layout.index')
@section('title')
  <title>Import Template</title>
  <meta id="csrf-token" name="csrf-token" value="{{ csrf_token() }}">
  {{-- <link href="/templatemanager/node_modules/medium-editor/dist/css/medium-editor.css" rel="stylesheet">--}}
@endsection
@section('style')
  <style type="text/css">
    .flex{
        display: flex;
        flex-wrap: wrap;
    }
    .flex table  {
        margin-left: 7%;
    }
  </style>
@endsection
@section('content')
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Import <small>Template</small> </h1>
        </div>

        <div id="import" style="display: inline-block;width: 100%; min-height: 300px;">
          <div id="input-data" class="input-data">
           <textarea type="text" id="scriptText" class="form-control" rows="10" style="width: 100%"></textarea><br>
            <button id="btn-data" class="btn btn-info" onclick="renderForm()">Get Form</button>
            <a href="https://demo.admicro.vn/testscript/" target="_blank"><input id="btn-script" type="submit" class="btn btn-info" onclick="renderAds()" style="margin-left: 25px" value="Run Script"></a>
          </div>
          <div id="template-form" style="width: 70%;float: right">
          {{--<div id="run-script" style="width: 50%; float: left;display: inline-block">--}}
          </div>
        </div>

        </div>
        <div id="ads">
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
  <script src="js/index.js"></script>
  <script type="text/javascript">
    var listArray=["image","link","title","domain","titlebox","title 1","desc"];
    var key=[];//data key in json
    var data="";
    function getData() {
          var tg="";
          var adsScript=document.getElementById('scriptText').value;
          var adsJson=adsScript.slice(adsScript.indexOf("{"),adsScript.lastIndexOf("}")+1);
          adsJson= JSON.parse(adsJson);

          //get data and data key from script
          for (var i in adsJson.data) {
              data +=  JSON.stringify(adsJson.data[i]);
              for (var j in adsJson.data[i].items) {
                  for(var x in adsJson.data[i].items[j]){
                      tg+=x +" ";
                  }
                  key[j]=tg;
                  tg="";
              }
          }
          //console.log(data);
      };

      function renderForm() {
          getData();
          var root=document.getElementById('template-form');
          var f= document.createDocumentFragment();
          var div=document.createElement('div');
          div.className="form-data flex";
          //var n=0;
          for(var i in key){
              var table=document.createElement("table");
              var listKey=key[i].split(" ");
              for(var j=0 ; j<=listKey.length;j++){
                  for(var x in listArray){
                      if(listKey[j]==listArray[x].toString()){
                          //n++;
                          var form= document.createElement('input');
                          form.id=listKey[j].toString()+i;
                          form.type="text";
                          form.className="form-control input-item";
                          form.setAttribute("onchange","setNewData()");
                          /*form.setAttribute("v-model", "items."+listKey[j].toString());
                          form.textContent='\{\{items.'+listKey[j].toString()+'\}\}';*/
                          var label= document.createElement('label');
                          label.textContent=listKey[j].toString()+" "+(Number(i)+1)+": ";

                          var tr=document.createElement("tr");
                          var td1=document.createElement("td");
                          var td2=document.createElement("td");
                          td1.appendChild(label);
                          td2.appendChild(form);
                          tr.appendChild(td1);
                          tr.appendChild(td2);
                          table.appendChild(tr);
                      }
                  }

              }
              //n=0;
              table.appendChild(document.createElement('hr'));
              div.appendChild(table);
              f.appendChild(div);
              if(typeof(document.getElementsByClassName('form-data')[0]) === 'undefined')
                root.appendChild(f);
          }
          getDataToForm();
      }

      function getDataToForm() {
          var adsScript=document.getElementById('scriptText').value;
          var adsJson=adsScript.slice(adsScript.indexOf("{"),adsScript.lastIndexOf("}")+1);
          adsJson= JSON.parse(adsJson);

          //get data to form
          for (var i in adsJson.data) {
              for (var j in adsJson.data[i].items) {
                  for(var x in adsJson.data[i].items[j]){
                      for(var key in listArray){
                          if(x==listArray[key].toString()){
                              //console.log(adsJson.data[i].items[j][x]);
                              document.getElementById(x+j).value=adsJson.data[i].items[j][x];
                          }
                      }
                  }
              }
          }
      }

      function setNewData() {
          var adsScript=document.getElementById('scriptText').value;
          var adsJson=adsScript.slice(adsScript.indexOf("{"),adsScript.lastIndexOf("}")+1);
          adsJson= JSON.parse(adsJson);

          //get data to form
          for (var i in adsJson.data) {
              for (var j in adsJson.data[i].items) {
                  for(var x in adsJson.data[i].items[j]){
                      for(var key in listArray){
                          if(x==listArray[key].toString()){
                              //console.log(adsJson.data[i].items[j][x]);
                              adsJson.data[i].items[j][x]=document.getElementById(x+j).value;
                          }
                      }
                  }
              }
          }
          document.getElementById('scriptText').value=adsScript.replace(adsScript.slice(adsScript.indexOf("{"),adsScript.lastIndexOf("}")+1),JSON.stringify(adsJson));
      }

      function renderAds(){
         var runScript = document.getElementById('ads');
         runScript.innerHTML=document.getElementById('scriptText').value;
      }

    // view script text
    $(document).ready(function() {
        // grab the initial top offset of the navigation
        var stickyNavTop = $('#input-data').offset().top;

        // our function that decides weather the navigation bar should have "fixed" css position or not.
        var stickyNav = function(){
            var scrollTop = $(window).scrollTop(); // our current vertical position from the top

            // if we've scrolled more than the navigation, change its position to fixed to stick to top,
            // otherwise change it back to relative
            if (scrollTop > stickyNavTop) {
                $('#input-data').addClass('import-sticky');
            } else {
                $('#input-data').removeClass('import-sticky');
            }
        };

        stickyNav();
        // and run it again every time you scroll
        $(window).scroll(function() {
            stickyNav();
        });
    });
  </script>
@endsection
