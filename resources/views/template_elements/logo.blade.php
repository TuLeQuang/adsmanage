@extends('admin.layout.index')

@section('content')
<style>
    .container{
        margin-top: 50px;
        margin-left: 100px;
        width: 1000px;
        margin: 0 auto;
        
    }
    .contentform{
        float: left;width: 70%;
        border: 1px solid #ddd;
        position: relative;
    }
    .showlogo{
        display: none;
    }
    .crud{
    position: absolute;
    top: 0;
    right: 0;
    }
    .classline{width: 100%;padding-bottom: 10px;float: left;margin:  auto}
    .classtitle{font-weight: bold;width: 15%;display: inline-block;}
    .input{width: 30%;}
    .box 
    {
    margin: 0 auto;
    float: left;
    margin-top: 50px;
    width: 301px;
    height: 101px;
    background-color: #54cfb3;
    padding-top: 70px;
}
    }
    .opac
    {
    opacity: .8;
    }

    .move-cursor 
    {
    cursor: move;
    }

    .grab-cursor {
    cursor: grab;
    cursor: -webkit-grab;
    }

</style>
<div id="page-wrapper">
    <div class=content"container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Logo
                    <small>Edit</small>
                </h1>
            </div>
        </div>
        <div class="container">
            <div id="showlogo" class="contentform" style="display: none;" >
                <div>
                    <div class="crud"  >
                        <button type="button" class="btn btn-default btn-sm" title="Remove Logo">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                    </div>
                    <div>
                        <p style="clear: both;text-align: center;font-size: 16px;"><b>Logo</b></p>
                    </div>
                </div>
                <div id="formconfix" align="center">
                    <div>
                        <div>
                            <div class="classline">
                                <span class="classtitle">Link logo</span>
                                <input class="input" type="text" id="logoUrl" onchange="myFunction()" placeholder="http://www.example.com"><br>
                            </div>
                            <div class="classline">
                                <span class="classtitle">Size logo</span>
                                <<textarea name=""><img id="img" src=""></textarea>
                            </div>
                        </div>
                        <button type="submit"  class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-danger">Clear</button>
                    </div>
                </div>
            </div>
            <div style="width: 30%;float: left; padding-left: 50px">
                <button onclick="clicklogo()">Logo</button>
            </div>
        </div>
    </div>
</div>
<script>
    function clicklogo() {
        var x = document.getElementById("showlogo");
        if(x.style.display === "none")
        {
            x.style.display = "block";
        }
        else 
        {
            x.style.display = "none";
        }
    }
    function myFunction()
    {
        var img=document.createElement('img');
        img.src= document.getElementById(logoUrl).value;
        img.style=logosize;
   }
   grid_size = 10;

    $(" .box ")
    .draggable({ grid: [ grid_size, grid_size ] })

    .resizable({ grid: grid_size * 2 })

    .on("mouseover", function(){
    $( this ).addClass("move-cursor")
    })

    .on("mousedown", function(){
    $( this )
    .removeClass("move-cursor")
    .addClass("grab-cursor")
    .addClass("opac");

    $(" .text ").hide();

    })

    .on("mouseup", function(){
    $( this )
    .removeClass("grab-cursor")
    .removeClass("opac")
    .addClass("move-cursor");
    });
    </script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

@endsection