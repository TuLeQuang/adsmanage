@extends('admin.layout.index')
@section('title')
  <title>Import Template</title>
  <meta id="csrf-token" name="csrf-token" value="{{ csrf_token() }}">
  <link href="{{asset('css/bootstrap-multiselect.css')}}" rel="stylesheet">
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

        <div id="import">
          <div id="input-data" class="input-data">
           <span id="msg" style="color: red"></span><br>
           <textarea type="text" id="scriptText" class="form-control" rows="10" placeholder="Nhập data dạng Json" style="width: 100%"></textarea><br>
            <button id="btn-data" class="btn btn-info" onclick="getDataKey()">Get Form</button>
            <a href="https://demo.admicro.vn/testscript/" target="_blank"><input id="btn-script" type="submit" class="btn btn-info" style="margin-left: 25px" value="Run Script"></a>
          </div>
          <div id="form-render">
              <div id="checkBoxList">
                  <select name="lstStates" id="lstStates" onchange="selectKey()" multiple style="display: none">
                  </select>
              </div>
              <div id="form" style="margin-top: 10px"></div>
          {{--<div id="run-script" style="width: 50%; float: left;display: inline-block">--}}
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
  <script src="{{asset('js/bootstrap-multiselect.js')}}"></script>
  <script type="text/javascript">
    //var itemsKey=["image","link","title","domain","titlebox","title 1","desc","descr","content","color","src","slogan","logoBrand","descadv","sf_color",""];
    var itemsKey=[];
    var key=[];//data key in json
    var data="";

    function getDataJson() {
        var adsScript=document.getElementById('scriptText').value;
        var adsJson=adsScript.slice(adsScript.indexOf("{"),adsScript.lastIndexOf("}")+1);
        return JSON.parse(adsJson);
    }

    function getDataKey() {
        try {
            var adsJson= getDataJson();
            //choose key to render form
            var k=[];
            (function traverse(o) {
                for (var i in o) {
                    if (o[i] !== null && typeof(o[i])=="object") {
                        //going on step down in the object tree!!
                        traverse(o[i]);
                    }
                    else{
                        k.push(i);
                    }
                }
            })
            (adsJson);

            //remove key
            key = remove_duplicates(k);
            checkBoxList(key);
            $('#lstStates').multiselect('rebuild');
            //console.log(key);
            //console.log(data);
            //console.log(key.toString());
        }
        catch(err) {
            document.getElementById("msg").innerHTML = err.message;
        }
      };

     /* function renderForm() {
          getDataKey();
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
                          /!*form.setAttribute("v-model", "items."+listKey[j].toString());
                          form.textContent='\{\{items.'+listKey[j].toString()+'\}\}';*!/
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
      }*/

    //render checkbox list form array
    function checkBoxList(aray) {
        var checkList=document.getElementById('lstStates');

        while (checkList.hasChildNodes()) {
            checkList.removeChild(checkList.firstChild);
        }
        checkList.style.display="block";
        var f=document.createDocumentFragment();
        for(var i in aray){
            var op= document.createElement('option');
            op.value=aray[i].toString();
            op.textContent=aray[i].toString();
            f.appendChild(op);
        }
        checkList.appendChild(f);
        itemsKey=[];
        document.getElementById('form').innerHTML="";
        selectKey();
    }

    //select key and render form
    function selectKey() {
        $('#lstStates').multiselect({
            onChange: function(option, checked) {
                if (checked === true) {
                    //console.log(select);
                    itemsKey.push($(option).val())
                }
                else {
                    itemsKey.splice(itemsKey.indexOf($(option).val()), 1);
                }
                //console.log(itemsKey);
                renderForm2();
            },
            onSelectAll: function () {
                $('#lstStates').on('change', function(){
                    var selected = $(this).find("option:selected");
                    itemsKey = [];
                    selected.each(function(){
                        itemsKey.push($(this).val());
                    });
                    renderForm2();
                });
            },
            buttonText: function(options, select) {
                if (options.length === 0)
                    return 'Select Key To Render Form';
                else if (options.length === select[0].length)
                    return 'All selected ('+select[0].length+')';
                else if (options.length >= 4)
                    return options.length + ' selected';
                else {
                    var labels = [];
                    options.each(function() {
                        labels.push($(this).val());
                    });
                    return labels.join(', ') + '';
                }
            },
            maxHeight: 300,
            includeSelectAllOption: true,
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            selectAllJustVisible: true
        });

    };

   //render form 2
    function renderForm2() {
        //console.log(itemsKey.join(" ")+2);
        var adsJson= getDataJson();
        //get data and render form
          var k=[];
          (function traverse(o,name) {
              name=name || "";
              for (var i in o) {
                  if (o[i] !== null && typeof(o[i])=="object") {
                      //k.push('<b>'+name+'</b>'+ i +'<br>');
                      //going on step down in the object tree!!
                      traverse(o[i],/*"&#8195;"+*/name+i+".");
                  }
                  else{
                      for(var j in itemsKey){
                          if(i==itemsKey[j]) {
                              k.push('<b>'+name+'</b>' + i +' : <input type="text" id="'+name +i+'" value="'+o[i]+'" onchange="setNewDataJson(\''+name+i+'\')" style="width: 300px;right:0px" class="form-control input-item"><br>'/*+ ' - ' + o[i]*/);
                          }
                          /*else{
                              k.push(name + i +'<br>'/!*+ ' - ' + o[i]*!/);
                          }*/
                      }
                  }
              }
          })
          (adsJson);
          //console.log(k);
        document.getElementById('form').innerHTML=k.join(" ");
    }

   //change dataJson
    function setNewDataJson(inputId) {
        var val=document.getElementById(inputId).value;
        inputId=inputId.toString().replace(/\s+/g, "");
        var adsScript=document.getElementById('scriptText').value;
        var adsJson= getDataJson();
        (function traverse(o,name) {
            name=name || "";
            for (var i in o) {
                if (o[i] !== null && typeof(o[i])=="object") {
                    //going on step down in the object tree!!
                    traverse(o[i],"&#8195;"+name+i+".");
                }
                else{
                   if((name+i).indexOf(inputId)!=-1){
                       //console.log("tim thay");
                       o[i]=val;
                   }
                   //else console.log("ko tim thay");
                }
            }
        })
        (adsJson);
        document.getElementById('scriptText').value=adsScript.replace(adsScript.slice(adsScript.indexOf("{"),adsScript.lastIndexOf("}")+1),JSON.stringify(adsJson));
    }

    //remove remove-duplicate-values-from dataJson
    function remove_duplicates(arr) {
        let s = new Set(arr);
        let it = s.values();
        return Array.from(it);
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
