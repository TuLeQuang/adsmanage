@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    
        
            <div class="col-lg-12">
                <h1 class="page-header">
                    Hello <small>{{Auth::user()->name}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
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
                        <th style="text-align: center;">Edit</th>
                    </tr>
                </thead>
                <tbody>
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
                        <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="admin/user/user_edit/{{$us->id}}">Edit</a></td>
                    </tr>
                </tbody>
            </table>
        
        <!-- /.row -->
    
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection

@section('script')
    <script>
        $("div.alert").delay(2000).slideUp();
        function xacnhanxoa(msg){
            if(window.confirm(msg))
            {
                return true;
            }
            return false;
        }
    </script>
@endsection