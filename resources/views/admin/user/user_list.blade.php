@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User</h1>
            </div>
            <!-- /.col-lg-12 -->
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
            <div style="float: right;margin-bottom: 5px; display: inline-block">
                <button class="btn btn-success"><a href="admin/user/user_add" style="text-decoration: none;color: white">&#43; Add User</a></button>
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
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $us)
                    <tr class="odd gradeX" align="center">
                        <td>{{$us->id}}</td>
                        <td>{{$us->name}}</td>
                        <td>{{$us->email}}</td>
                        <td>{{$us->level}}
                            @if($us->level==1)
                                {{"Admin"}}
                            @else
                                {{"Menber"}}
                            @endif
                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/delete/{{$us->id}}">Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/user_edit/{{$us->id}}">Edit</a></td>
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