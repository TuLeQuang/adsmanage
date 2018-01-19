<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    @yield('title')
    <base href="{{asset('')}}">
    <!-- Bootstrap Core CSS -->
    <link href="admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="admin_asset/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="admin_asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- DataTables CSS -->
    <link href="admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="admin_asset/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <link href="css/my.css" rel="stylesheet">

    <link href="css/jquery-ui/jquery-ui.css" rel="stylesheet">

    <link href="css/jquery-ui/jquery-ui.theme.css" rel="stylesheet">

 

    @yield('style')
</head>

<body>

    <div id="wrapper">

        @include('admin.layout.header')

        @yield('content')

        <div style="text-align: center;font-size: 13px;color: black">Copyright © Your Website 2018</div>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
  
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('admin_asset/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    @yield('script')
</body>

</html>
