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
          <h1 class="page-header">Template List</h1>
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
          <button class="btn btn-success"><a href="{{route('template.create')}}" style="text-decoration: none;color: white">&#43; Add Template</a></button>
        </div>

        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
          <thead>
          <tr align="center" >
            <th style="text-align: center;">ID</th>
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
                @if($templates[$i]['active']==1)
                  <td style="color: green">Active</td>
                @else
                  <td style="color: red">Un-Active</td>
                @endif

              <td class="center"><i class="fa fa-pencil fa-fw"></i>
                <a href="{{ route('template.show',$templates[$i]['id'])}}">Detail</a></td>

              <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                <form action="{{route('template.destroy',$templates[$i]['id'])}}" method="POST">
                  <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger" >Xoa</button>
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
  <script type="text/javascript" language="JavaScript">

  </script>
@endsection
