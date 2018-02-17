@extends('admin.layout.index')
@section('title')
  <title>Import Template</title>
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
          <h1 class="page-header">Import <small>Template</small> </h1>
        </div>

        <div id="import" style="display: inline-block;width: 100%; min-height: 300px;">
          <div id="input-data" class="input-data">
           <span id="msg" style="color: red"></span><br>
           <textarea type="text" id="scriptText" class="form-control" rows="10" style="width: 100%"></textarea><br>
            <button id="btn-data" class="btn btn-info" onclick="getData()">Get Form</button>
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
  {{--<script src="/templatemanager/node_modules/vee-validate/dist/vee-validate.js"></script>
  <script src="/templatemanager/node_modules/vue/dist/vue.js"></script>
  <script src="js/index.js"></script>--}}
  <script type="text/javascript">
    var itemsKey=["image","link","title","domain","titlebox","title 1","desc","descr","content","color","src","slogan","logoBrand","descadv","sf_color",""];
    var key=[];//data key in json
    var data="";

    function getData() {
        try {
            var tg="";
            var adsScript=document.getElementById('scriptText').value;
            var adsJson=adsScript.slice(adsScript.indexOf("{"),adsScript.lastIndexOf("}")+1);
            adsJson= JSON.parse(adsJson);

            /*// run with this
            //document.getElementById('template-form').innerHTML=allInternalObjs(adsJson);
            console.log(allInternalObjs(adsJson));*/

            /*traverse(adsJson, function (key, value, trail) {
                document.getElementById('template-form').innerHTML=arguments.join();
            });*/

            //get data and render form
            var k=[];
            (function traverse(o,name) {
                name=name || "";
                for (var i in o) {
                    if (o[i] !== null && typeof(o[i])=="object") {
                        k.push(name + i +'<br>');
                        //going on step down in the object tree!!
                        traverse(o[i],"&#8195;"+name+i+".");
                    }
                    else{
                        for(var j in itemsKey){
                            if(i==itemsKey[j]) {
                                k.push(name + i +' : <input type="text" id="'+name +i+'" value="'+o[i]+'" onchange="setNewDataJson(\''+name+i+'\')" style="width: 300px;right:0px" class="form-control input-item"><br>'/*+ ' - ' + o[i]*/);
                            }
                            /*else{
                                k.push(name + i +'<br>'/!*+ ' - ' + o[i]*!/);
                            }*/
                        }

                    }
                }
            })
            (adsJson);

            var div = document.createElement('div');
            div.innerHTML=k.join(" ");
            document.getElementById('template-form').appendChild(div);


            //get data and data key from script
            for (var i in adsJson.data) {
                data +=  JSON.stringify(adsJson.data[i]);
                if(data.indexOf("items")>0){
                    for (var j in adsJson.data[i].items) {
                        for(var x in adsJson.data[i].items[j]){
                            tg+=x +" ";
                        }
                        key[j]=tg;
                        tg="";
                    }
                }
                else {
                    for(var j in adsJson.data[i]){
                        tg+=j +" ";
                    }
                    key[i]=tg;
                    tg="";
                }
            }
            //console.log(data);
            //console.log(key.toString());
        }
        catch(err) {
            document.getElementById("msg").innerHTML = err.message;
        }

      };

      function renderForm() {
          getData();
          var root=document.getElementById('template-form');
          var f= document.createDocumentFragment();
          var div=document.createElement('div');
          div.className="form-data flex";

          for(var i in key){
              var table=document.createElement("table");
              var listKey=key[i].split(" ");
              for(var j=0 ; j<=listKey.length;j++){
                  for(var x in itemsKey){
                      if(listKey[j]==itemsKey[x].toString()){
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
              table.appendChild(document.createElement('hr'));
              div.appendChild(table);
              f.appendChild(div);
              if(typeof(document.getElementsByClassName('form-data')[0]) === 'undefined')
                root.appendChild(f);
              else {
                  var form=document.getElementById("template-form");
                  while (form.hasChildNodes()) {
                      form.removeChild(form.firstChild);
                  }
                  root.appendChild(f);
              }
          }
          getDataToForm();
      }

      function getDataToForm() {
          var adsScript=document.getElementById('scriptText').value;
          var adsJson=adsScript.slice(adsScript.indexOf("{"),adsScript.lastIndexOf("}")+1);
          adsJson= JSON.parse(adsJson);

          //get data to form
          for (var i in adsJson.data) {
              if(data.indexOf("items")>0){
                  for (var j in adsJson.data[i].items) {
                      for(var x in adsJson.data[i].items[j]){
                          for(var key in itemsKey){
                              if(x==itemsKey[key].toString()){
                                  //console.log(adsJson.data[i].items[j][x]);
                                  document.getElementById(x+j).value=adsJson.data[i].items[j][x];
                              }
                          }
                      }
                  }
              }
              else{
                  for(var j in adsJson.data[i]){
                      for(var key in itemsKey){
                          if(j==itemsKey[key].toString()){
                              //console.log(adsJson.data[i][j]);
                              document.getElementById(j+i).value=adsJson.data[i][j];
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
              if(data.indexOf("items")>0){
                  for (var j in adsJson.data[i].items) {
                      for(var x in adsJson.data[i].items[j]){
                          for(var key in itemsKey){
                              if(x==itemsKey[key].toString()){
                                  //console.log(adsJson.data[i].items[j][x]);
                                  adsJson.data[i].items[j][x]=document.getElementById(x+j).value;
                              }
                          }
                      }
                  }
              }
              else{
                  for(var j in adsJson.data[i]){
                      for(var key in itemsKey){
                          if(j==itemsKey[key].toString()){
                              //console.log(adsJson.data[i][j]);
                              adsJson.data[i][j]=document.getElementById(j+i).value;
                          }
                      }
                  }
              }
          }
          document.getElementById('scriptText').value=adsScript.replace(adsScript.slice(adsScript.indexOf("{"),adsScript.lastIndexOf("}")+1),JSON.stringify(adsJson));
      }

   /* // get keys of an object or array
    function getkeys(z){
        var out=[];
        for(var i in z){out.push(i)};
        return out;
    }
    // print all inside an object
    function allInternalObjs(data,name) {
        name=name || "";
        return getkeys(data).reduce(function(olist, k){
            var v = data[k];
            if(typeof v === 'object') {
                olist.push.apply(olist, allInternalObjs(v,name +"."+ k));
            }
            else {
                olist.push(name +"."+k);
            }
            return olist;
        }, []);
    }

    //cach 2
    function traverse (obj, callback, trail) {
        trail = trail || [];

        Object.keys(obj).forEach(function (key) {
            var value = obj[key]

            if (Object.getPrototypeOf(value) === Object.prototype) {
                traverse(value, callback, trail.concat(key))
            } else {
                callback.call(obj, key, value, trail)
            }
        })
    }*/
    function setNewDataJson(inputId) {
        var val=document.getElementById(inputId).value;
        inputId=inputId.toString().replace(/\s+/g, "");
        var adsScript=document.getElementById('scriptText').value;
        var adsJson=adsScript.slice(adsScript.indexOf("{"),adsScript.lastIndexOf("}")+1);
        adsJson= JSON.parse(adsJson);

        (function traverse(o,name) {
            name=name || "";
            for (var i in o) {
                if (o[i] !== null && typeof(o[i])=="object") {
                    //going on step down in the object tree!!
                    traverse(o[i],"&#8195;"+name+i+".");
                }
                else{
                   if((name+i).indexOf(inputId)!=-1){
                       console.log("tim thay");
                       o[i]=val;
                   }
                   else console.log("ko tim thay");
                }
            }
        })
        (adsJson);

        document.getElementById('scriptText').value=adsScript.replace(adsScript.slice(adsScript.indexOf("{"),adsScript.lastIndexOf("}")+1),JSON.stringify(adsJson));

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
