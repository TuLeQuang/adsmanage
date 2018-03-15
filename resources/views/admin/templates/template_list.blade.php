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
        @if(Auth::user()->level==1 || Auth::user()->level==0)
          <div style="float: right;margin-bottom: 5px; display: inline-block">
           <a href="{{route('template.create')}}" style="text-decoration: none;color: white"><button class="btn btn-success">&#43; Add Template</button></a>
          </div>
        @endif
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
          <thead>
            <tr align="center" >
            <th style="text-align: center;">Stt</th>
            <th style="text-align: center;">User_Id</th>
            <th style="text-align: center;">Template Name</th>
            <th style="text-align: center;">Create At</th>
            <th style="text-align: center;">Updated At</th>
            @if(Auth::user()->level==1 )
              <th style="text-align: center;">Active</th>
            @endif
            <th style="text-align: center;" >Detail</th>
            @if(Auth::user()->level==1 || Auth::user()->level==0)
              <th style="text-align: center;" >Delete</th>
            @endif
            </tr>
          </thead>
          <tbody>
          @for($i=0;$i<count($templates);$i++)
            <tr class="odd gradeX" align="center">
              <td>{{$i+1}}</td>
              <td>{{$templates[$i]['user_id']}}</td>
              <td>{{$templates[$i]['name']}}</td>
              <td>{{$templates[$i]['created_at']}}</td>
              <td>{{$templates[$i]['updated_at']}}</td>
              @if(Auth::user()->level==1)
                <td>
                  @if($templates[$i]['active']==1)
                    <i class="fa fa-unlock"></i>
                    @if(Auth::user()->level==1 || Auth::user()->level==0)
                      <a href="admin/active-tem/{{$templates[$i]['id']}}" style="color:green"
                      onclick="return xacnhan('Bạn có muốn thay đổi trạng thái hay không ?')" title="Active">
                        Acitive
                      </a>
                    @else
                      <a disabled style="color: #cdcdcd;cursor: not-allowed">Acitive</a>
                    @endif
                  @else
                    <i class="fa fa-lock"></i>
                    <a href="admin/active-tem/{{$templates[$i]['id']}}" style="color:red"
                    onclick="return xacnhan('Bạn có muốn thay đổi trạng thái hay không ?')" title="Un-Active">
                      Un-Active
                    </a>
                  @endif
                </td>
              @endif

              <td class="center"><i class="fa fa-pencil fa-fw"></i>
                <a href="{{ route('template.show',$templates[$i]['id'])}}" title="Detail">Detail</a>
              </td>

              @if(Auth::user()->level==1 || Auth::user()->level==0)
                <td class="center">
                  <form action="{{route('template.destroy',$templates[$i]['id'])}}" method="POST">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                    <input type="hidden" name="_method" value="DELETE">
                    @if(Auth::user()->level==1 || Auth::user()->id==$templates[$i]['user_id'])
                      <button type="submit" class="button-delete" onclick="return xacnhan('Bạn có chắc chắn muốn xóa không ?')" title="Delete Template">
                      <i class="fa fa-trash-o fa-fw"></i>Delete
                    </button>
                    @else
                    <a style="cursor: not-allowed;">
                      <button type="submit" class="btn btn-danger" style="cursor: not-allowed;color: #cdcdcd" disabled>
                      <i class="fa fa-trash-o fa-fw"></i>Delete
                      </button>
                    </a>
                    @endif
                  </form>
                </td>
              @endif
            </tr>
          @endfor

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
    $("div.alert").delay(2000).slideUp();

    function xacnhan(msg)
    {
      if(window.confirm(msg))
      {
        return true;
      }
      return false;
    }

    $(document).ready(function() {
      $('#dataTables-example').DataTable({
              responsive: true
      });
    });
  </script>

@endsection
