@extends('admin.layout.index')
@section('title')
    <title>List User</title>
@endsection
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        
            <div class="col-lg-12">
                <h1 class="page-header">Hello {{Auth::user()->name}}          
                </h1>
            </div>
            <!-- /.col-lg-12 -->
             
            <div style="float: right;margin-bottom: 5px; display: inline-block">
                <button type="button" class="btn btn-success"><a href="{{asset('admin/user/user_add/')}}" style="text-decoration: none;color: white">&#43; Add User</a></button>
            </div>
            <div style="clear: both;">
                @if(count($errors) > 0) 
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
                @endif

                @if(session('thongbao'))
                    <div class="alert alert-danger">
                        {{session('thongbao')}}
                    </div>
                @endif
                @if(session('thongbao1'))
                    <div class="alert alert-success">
                        {{session('thongbao1')}}
                    </div>
                @endif
            </div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center" >
                        <th style="text-align: center;">ID</th>
                        <th style="text-align: center;">Name</th>
                        <th style="text-align: center;">Email</th>
                        <th style="text-align: center;">Level</th>
                        <th style="text-align: center;">Delete</th>
                        <th style="text-align: center;">Edit</th>
                        <th style="text-align: center;">Active</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $us)
                    <tr class="odd gradeX" align="center">
                        <td>{{$us->id}}</td>
                        <td>{{$us->name}}</td>
                        <td>{{$us->email}}</td>
                        <td>
                            @if($us->level==1)
                                {{"Admin"}}
                            @else
                                {{"Member"}}
                            @endif
                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/delete/{{$us->id}}" onclick="return xacnhan('Bạn có muốn xóa không ?')">Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/user_edit/{{$us->id}}">Edit</a></td>
                        
                        <td class="center" ><i class="fa fa-cog fa-spin fa-x fa-fw"></i>@if($us->active==1)<a href="admin/user/active/{{$us->id}}" style="color: green" onclick="return xacnhan('Bạn có muốn thay đổi trạng thái hay không ?')">
                        Active</a> @else<a href="admin/user/active/{{$us->id}}" style="color: red" onclick="return xacnhan('Bạn có muốn thay đổi trạng thái hay không ?')">
                        UnActive</a>
                        @endif</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection

@section('script')
    <script>
        $("div.alert").delay(2000).slideUp();
        function xacnhan(msg){
            if(window.confirm(msg))
            {
                return true;
            }
            return false;
        }

    </script>
@endsection