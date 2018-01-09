@extends('admin.layout.index')

@section('content')
<style>
    .container{
        margin-top: 50px;
        margin-left: 100px;
        width: 100%
    }
    .col-md-4{
        border: 1px solid #ccc;
    }
    .contentform{
        position: relative;
    }
    .formnhap,
    .crud{
    position: absolute;
    top: 0;
    padding-left: -10px
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
            <div class="contentform" style="width: 70%;float: left;background: #ddd">
                <div id="showlogo" style="display: none;">
                    <p style="float: left;">Logo</p>
                    <div class="crud" style="float: right;">
                        <button type="button" class="btn btn-default btn-sm" title="Remove Logo">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                        <button onclick="clickedit()" type="button" class="btn btn-default btn-sm" title="Edit">
                            <span class="glyphicon glyphicon-wrench"></span>
                        </button>
                    </div>
                </div>
                <div id="formconfix" style="display: none;">
                    <form>
                        <table  style="width:600px;border:1px solid #ddd;border-radius: 10px;">
                            <tr>
                                <td>Link Logo:</td>
                                <td><input type="text" id="logo"></td>
                            </tr>
                            <tr>
                                <td>Logo size:</td>
                                <td>
                                    <input type="text">
                                </td>
                            </tr>
                        </table>
                        <button type="submit" style="text-align: center;" class="btn btn-primary">Save</button>
                        <button type="reset" style="margin: 0 auto " class="btn btn-danger">Clear</button>
                    </form>
                </div>
            </div>
            <div style="width: 20%;float: left; padding-left: 50px">
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
    function clickedit() {
        var a = document.getElementById("formconfix");
        if(a.style.display === "none"){
            a.style.display = "block";  
        }
        else {
            a.style.display = "none";
        }
    }
    </script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
@endsection