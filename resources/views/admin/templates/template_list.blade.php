@extends('admin.layout.index')
@section('title')
  <title>Template</title>
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
          <h1 class="page-header">Template <small>List</small></h1>
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
        <div style="float: right;margin-bottom: 5px; display: inline-block">
         <a href="{{route('template.create')}}" style="text-decoration: none;color: white"><button class="btn btn-success">&#43; Add Template</button></a>
        </div>
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
          <thead>
            <tr align="center" >
            <th style="text-align: center;">Id</th>
            <th style="text-align: center;">User_Id</th>
            <th style="text-align: center;">Template Name</th>
            <th style="text-align: center;">Create At</th>
            <th style="text-align: center;">Updated At</th>
            <th style="text-align: center;">Active</th>
            <th style="text-align: center;" colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
          @for($i=0;$i<count($templates);$i++)
            <tr class="odd gradeX" align="center">
              <td>{{$templates[$i]['id']}}</td>
              <td>{{$templates[$i]['user_id']}}</td>
              <td>{{$templates[$i]['name']}}</td>
              <td>{{$templates[$i]['created_at']}}</td>
              <td>{{$templates[$i]['updated_at']}}</td>

              {{-- <td>
                <div>
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
                    <i class="fa fa-eye"></i> Preview
                  </button>
                  <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Review Template {{$templates[$i]['name']}}</h4>
                        </div>
                        <div class="modal-body">
                          <img src="https://dantricdn.com/thumb_w/640/2018/2/6/cm2-15178846444832023341470.jpg" style="background-size: auto;width: 250px;height: 250px">
                          {{$templates[$i]['name']}}
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </td> --}}
              
              <td>
                @if($templates[$i]['active']==1)
                  <i class="fa fa-unlock"></i>
                  <a href="admin/active-tem/{{$templates[$i]['id']}}" style="color:green" 
                  onclick="return xacnhan('Bạn có muốn thay đổi trạng thái hay không ?')" title="Active">
                    Acitive
                  </a>
                @else
                  <i class="fa fa-lock"></i>
                  <a href="admin/active-tem/{{$templates[$i]['id']}}" style="color:red" 
                  onclick="return xacnhan('Bạn có muốn thay đổi trạng thái hay không ?')" title="Un-Active">
                    Un-Active
                  </a> 
                @endif
                </a>
              </td>

              <td class="center"><i class="fa fa-pencil fa-fw"></i>
                <a href="{{ route('template.show',$templates[$i]['id'])}}" title="Detail">Detail</a>
              </td>

              <td class="center">
                <form action="{{route('template.destroy',$templates[$i]['id'])}}" method="POST">
                  <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger" onclick="return xacnhan('Bạn có chắc chắn muốn xóa không ?')" title="Delete Template">
                    <i class="fa fa-trash-o fa-fw"></i>Delete
                  </button>
                </form>
              </td> 
            </tr>
          @endfor

          </tbody>
        </table>
        {{ $templates->links() }}
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->
@endsection

@section('script')
  <script>
    $("div.alert").delay(2000).slideUp();
    function xacnhan(msg)
    {
      if(window.confirm(msg))
      {
        return true;
      }
      return false;
    }
   </script>
@endsection
