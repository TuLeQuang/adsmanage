@extends('admin.layout.index')
@section('title')
    <title>List User</title>
@endsection
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Hello <small>{{Auth::user()->name}}</small></h1>
            </div>
            <!-- /.col-lg-12 -->

            <div style="float: right;margin-bottom: 5px; display: inline-block">
                <a href="{{asset('admin/user/user_add/')}}" style="text-decoration: none;color: white" title="Add User"><button type="button" class="btn btn-success">&#43; Add User</button></a>
            </div>
            <div style="clear: both;">
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
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center" >
                        <th style="text-align: center;">Id</th>
                        <th style="text-align: center;">Name</th>
                        <th style="text-align: center;">Email</th>
                        <th style="text-align: center;">Level</th>
                        <th style="text-align: center;">Active</th>
                        <th style="text-align: center;">Edit</th>
                        <th style="text-align: center;">Delete</th>
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
                            <td class="center" >
                                @if($us->active==1)
                                    <i class="fa fa-unlock"></i>
                                    <a href="admin/user/active/{{$us->id}}" style="color: green" onclick="return xacnhan('Bạn có muốn thay đổi trạng thái hay không ?')" title="Active">
                                        Active
                                    </a>
                                @else
                                    <i class="fa fa-lock"></i>
                                    <a href="admin/user/active/{{$us->id}}" style="color: red" onclick="return xacnhan('Bạn có muốn thay đổi trạng thái hay không ?')" title="Un-Active">
                                        Un-Active
                                    </a>
                                @endif
                            </td>
                            <td class="center">
                                <i class="fa fa-pencil fa-fw"></i>
                                <a href="admin/user/user_edit/{{$us->id}}" title="Edit User">Edit</a>
                            </td>
                            <td class="center">
                                <a href="admin/user/delete/{{$us->id}}" onclick="return xacnhan('Bạn có muốn xóa không ?')" title="Delete User">
                                <i class="fa fa-trash-o  fa-fw"></i>Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection

@section('script')
    <script>
        $("div.alert").delay(2500).slideUp();
        function xacnhan(msg){
            if(window.confirm(msg))
            {
                return true;
            }
            return false;
        }
    </script>


    <script>
    $(document).ready(function() {
      $('#dataTables-example').DataTable({
              responsive: true
      });
    });
  </script>
@endsection