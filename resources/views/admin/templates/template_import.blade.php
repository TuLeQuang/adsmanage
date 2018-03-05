@extends('admin.layout.index')
@section('title')
  <title>Import Template</title>
  <meta id="csrf-token" name="csrf-token" value="{{ csrf_token() }}">
  <link href="{{asset('css/bootstrap-multiselect.css')}}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css" rel="stylesheet">
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
            <div id="checkBoxList">
              <select name="lstStates" id="lstStates" onchange="selectKey()" multiple style="display: none">
              </select>
            </div>
            <div id="coreJs" style="display: none;margin-top: 10px;">
                <select name="core" id="core" style="width: 200px;height: 32px" onchange="showDemo(this.value)">
                    <option disabled selected> Chọn core load cùng</option>
                    <option value="">Script bên ngoài</option>
                    <option value="1" >Admicro PC</option>
                    <option value="2" >Admicro Mobile</option>
                    <option value="3" >Video Vast</option>
                </select>
            </div>
           <span id="msg" style="color: red"></span><br>
           <textarea type="text" id="scriptText" class="form-control" rows="10" placeholder="Nhập data dạng Json" style="width: 100%"></textarea><br>
           <button id="btn-data" class="btn btn-info" onclick="getDataKey()">Get Form</button>
           <button id="btn-script" onclick="runScript()" class="btn btn-info" style="margin-left: 25px" value="Run Script">Run Script</button>
          </div>
          <div id="form-render">
          {{--<div id="run-script" style="width: 50%; float: left;display: inline-block">--}}
          </div>
          <div id="demo" style="display: inline-block;position: relative"></div>
          {{--editor--}}
          <div id="cal1">&nbsp;</div>
          <div id="cal2">&nbsp;</div>
          <div id="editor">
            <button class="bold button-editor" id="bold" title="Bold"><i class="fa fa-bold"></i></button>
            <button class="italics button-editor" id="italics" title="Italic"><i class="fa fa-italic"></i></button>
            <button class="underline button-editor" id="underline" title="Underline"><i class="fa fa-underline"></i></button>
            <button class="button-editor"><input type="text" id="color" class="color" ></button>
          </div>
          <div id="ads"></div>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->
@endsection

@section('script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/postscribe/2.0.8/postscribe.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.js"></script>
  <script src="{{asset('js/bootstrap-multiselect.js')}}"></script>
  <script type="text/javascript">
    //var itemsKey=["image","link","title","domain","titlebox","title 1","desc","descr","content","color","src","slogan","logoBrand","descadv","sf_color",""];
    var itemsKey=[];
    var key=[];//data key in json
    var data="";

    //parse data from textarea to json
    function getDataJson() {
        var adsScript=document.getElementById('scriptText').value;
        var adsJson=adsScript.slice(adsScript.indexOf("{"),adsScript.lastIndexOf("}")+1);
        return JSON.parse(adsJson);
    }

    //read all json key
    function getDataKey() {
        try {
            document.getElementById('msg').innerHTML="";
            var adsJson= getDataJson();
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
            //console.log(data);
            //console.log(key.toString());

            //remove duplicates key
            key = remove_duplicates(k);

            //build checkbox list
            checkBoxList(key);
            //rebuild checkbox list if import new json
            $('#lstStates').multiselect('rebuild');
        }
        catch(err) {
            document.getElementById("msg").innerHTML = err.message;
        }
      };

    //render checkbox list from array
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
        document.getElementById('form-render').innerHTML="";
        selectKey();
    }

    //select key from checkbox list to render form
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
                renderForm();
            },
            onSelectAll: function () {
                $('#lstStates').on('change', function(){
                    var selected = $(this).find("option:selected");
                    itemsKey = [];
                    selected.each(function(){
                        itemsKey.push($(this).val());
                    });
                    renderForm();
                });
            },
            buttonText: function(options, select) {
                if (options.length === 0)
                    return 'Select Key To Render Form';
                else if (options.length === select[0].length)
                    return 'All selected ('+select[0].length+')';
                else if (options.length >= 5)
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

   //render form
    function renderForm() {
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
                              //k.push('<b>'+name+'</b>' + i +' : <input type="text" id="'+name +i+'" value=\''+o[i]+'\' onchange="setNewData(\''+name+i+'\')" style="width: 300px;right:0px" class="form-control input-item"><br>'/*+ ' - ' + o[i]*/);
                              k.push('<div class="data-input"><div class="lab-key"><b>'+name+'</b>' + i +' :</div><div class="input-flex" id="input-flex"><div id="'+name +i+'" onblur="setNewData(\''+name+i+'\')" contenteditable="true" class="edit-data">'+o[i] +'</div></div></div><br>'/*+ ' - ' + o[i]*/);
                          }
                      }
                  }
              }
          })
          (adsJson);
          //console.log(k);
        document.getElementById('form-render').innerHTML=k.join(" ");
    }

   //change JsonData
    function setNewData(inputId) {
        //var val=document.getElementById(inputId).value;
        var val=document.getElementById(inputId).innerHTML;
        inputId=inputId.toString().replace(/\s+/g, "");
        var adsScript=document.getElementById('scriptText').value;
        var adsJson= getDataJson();
        (function traverse(o,name) {
            name=name || "";
            for (var i in o) {
                if (o[i] !== null && typeof(o[i])=="object") {
                    //going on step down in the object tree!!
                    traverse(o[i],name+i+".");
                }
                else{
                   if((name+i).toString()==inputId){
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

    //editor
    $('#bold').on('click', function() {
        document.execCommand('bold', false, null);
    });
    $('#italics').on('click', function() {
        document.execCommand('italic', false, null);
    });

    $('#underline').on('click', function() {
        document.execCommand('underline', false, null);
    });
   /* $('.link a').click(function() {
        {
            url = prompt('Enter the link here: ', 'http://');
            document.execCommand($(this).data('command'), false, url);
        }
    });*/

    $('#color').spectrum({
        color: '#000000',
        showPalette: true,
        showInput: true,
        showInitial: true,
        preferredFormat: "hex",
        showButtons: false,
        change: function(color) {
            color = color.toHexString();
            document.execCommand('foreColor', false, color);
        }
    });

  /*  $('.size1').on('change', function() {
        var size = $(this).val();
        $('.texteditor').css('fontSize', size + 'px');
    });*/

  //editor css
    var ele = document.getElementById('editor');
    var sel = window.getSelection();
    var rel1= document.createRange();
    rel1.selectNode(document.getElementById('cal1'));
    var rel2= document.createRange();
    rel2.selectNode(document.getElementById('cal2'));
    window.addEventListener('mouseup', function () {
        if (!sel.isCollapsed) {
            var r = sel.getRangeAt(0).getBoundingClientRect();
            var rb1 = rel1.getBoundingClientRect();
            var rb2 = rel2.getBoundingClientRect();
            ele.style.top = (r.bottom+10 - rb2.top)*100/(rb1.top-rb2.top) + 'px'; //this will place ele below the selection
            ele.style.left = (r.left - rb2.left)*100/(rb1.left-rb2.left) + 'px'; //this will align the right edges together

            //code to set content
            if(sel.baseNode.parentNode.className == "edit-data"||sel.baseNode.parentNode.parentNode.className == "edit-data"||sel.baseNode.parentNode.parentNode.parentNode.className == "edit-data"||sel.baseNode.parentNode.parentNode.parentNode.parentNode.className == "edit-data"||sel.baseNode.parentNode.parentNode.parentNode.parentNode.parentNode.className == "edit-data")
                ele.style.display = 'block';
        }
        else
            ele.style.display = 'none';

    });
    /*window.addEventListener('mousedown', function () {
        ele.style.display = 'none';
    });*/

    function runScript(){
        document.getElementById('coreJs').style.display="block";
    }
    
    function showDemo(coreJs) {
        $(document).ready(function() {
            $('#btn_click').on('click', function() {
                var url = 'reloaddiv.php';
                $('#div1-wrapper').load(url + ' #div1');
            });
        });
        var adsScript=document.getElementById('scriptText').value;
        adsScript=adsScript.replace(/\//g,'\/');
        document.getElementById('msg').innerHTML="";
        if (adsScript!=""){
            if(coreJs=="1")
                var core='<script src="//admicro1.vcmedia.vn/core/admicro_core_nld.js"><\/script><div style="height:0px; width:0px; overflow:hidden;"><\/div><script type="text/javascript" src="//media1.admicro.vn/cpc/ssvzone_default.js"><\/script><div id="_admDivFlashdt" style="visibility:hidden; height:1px; width:1px; position:absolute;bottom:0px; overflow:hidden; left:100px;"><\/div>';
            else if (coreJs=="2")
                var core='<script src="//admicro1.vcmedia.vn/core/mb_core.js"><\/script>';
            else if (coreJs=="3")
                var core='<script src=""><\/script>';
            else
                var core='';

            document.getElementById('ads').innerHTML=core+adsScript;
            //$( "#demo" ).load(window.location.href + ' #ads' );
            postscribe('#demo', adsScript+core);
            /*var req = new XMLHttpRequest();
            req.open("get", "http://template.localhost/admin/import/", true);
            req.onreadystatechange = function () {
                if (req.readyState != 4 || req.status != 200) return;
                document.getElementById('demo').innerHTML=req.responseText;
            };*/
        }
        else
            document.getElementById('msg').innerHTML="Chưa nhập Script";
    }
  </script>
@endsection
