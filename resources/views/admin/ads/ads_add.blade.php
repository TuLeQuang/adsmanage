@extends('admin.layout.index')
@section('title')
  <title>Template Detail</title>
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
          <h1 class="page-header">Ads<small>Create</small> </h1>
        </div>
        <div id="app"></div>

        <div id="ads" style="float: right;width: 67%;word-wrap: break-word;padding-top: 10px"></div>
      </div>
      <div style="float: right;margin-bottom: 5px; display: inline-block">
         <a href="http://localhost/templatemanager/public/admin/template" style="text-decoration: none;color: white"><button class="btn btn-success">Show Template</button></a>
        </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->
@endsection

@section('script')

@endsection
