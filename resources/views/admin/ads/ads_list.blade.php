@extends('admin.layout.index')
@section('title')
  <title>Ads</title>
@endsection
@section('style')

  <style type="text/css">
    .review{
      width: 80px;
      height: 80px;
      border: 1px solid #ddd;
      background-image: none;
      background-repeat: no-repeat;
      background-position: center center;
      background-size: cover;
    }
  </style>
@endsection
@section('content')
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Ads <small>List</small></h1>
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
          <button class="btn btn-success" data-toggle="modal" data-target="#myModal">&#43; Add Ads</button>
          <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title" style="text-align: center;">Chọn template</h4>
                </div>
                <div class="modal-body">
                  <table class="table table-striped table-bordered table-hover" >
                    <thead>
                      <tr align="center" >
                      <th style="text-align: center;">Id</th>  
                      <th style="text-align: center;">Template Name</th>
                      <th style="text-align: center;">Detail</th>
                      <th style="text-align: center;">Chọn Mẫu</th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach($templateData as $templateDatas)
                      
                        <tr class="odd gradeX" align="center">
                          <td>{{$templateDatas->id}}</td>
                          <td>{{$templateDatas->name}}</td>
                          <td class="center"><i class="fa fa-pencil fa-fw"></i>
                            <a href="" title="Detail">Detail</a>
                          </td>
                          <td class="center"><i class="fa fa-edit fa-fw"></i>
                            <a href="#" title="Chọn Template">Chọn</a>
                          </td> 
                        </tr>
                        
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        
        <table class="table table-striped table-bordered table-hover" id="dataTables-examples">
          <thead>
            <tr align="center" >
              <th style="text-align: center;">Id</th>
              <th style="text-align: center;display: none">User_Id</th>
              <th style="text-align: center;display: none">Template_Id</th>
              <th style="text-align: center;">User_Name</th>
              <th style="text-align: center;">Template_Name</th>
              <th style="text-align: center;">Brand</th>
              <th style="text-align: center;">Create At</th>
              <th style="text-align: center;">Updated At</th>
              <th style="text-align: center;">Detail</th>
              <th style="text-align: center;">Edit</th>
              <th style="text-align: center;">Delete</th>

            </tr>
          </thead>
          <tbody id="dataTables">
            @foreach($adsData as $adsDatas)
              <tr class="odd gradeX" align="center">
                <td>{{$adsDatas->adsId}}</td>
                <td style="display: none">{{$adsDatas->adsUserId}}</td>
                <td style="display: none">{{$adsDatas->adstemplatesId}}</td>
                @if($adsDatas->adsUserId==$adsDatas->userId) 
                  <td>{{$adsDatas->userName}}</td>
                @endif 
                @if($adsDatas->adstemplatesId==$adsDatas->templatesId) 
                  <td>{{$adsDatas->templateName}}</td>
                @endif 
                
                <td>{{$adsDatas->brand}}</td>
                <td>{{$adsDatas->created_at}}</td>
                <td>{{$adsDatas->updated_at}}</td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i>
                  <a href="" title="Detail">Detail</a>
                </td>

                <td class="center" >
                  <i class="fa fa-pencil fa-fw"></i> 
                  @if(Auth::user()->level==1 || $adsDatas->adsUserId == Auth::user()->id)
                    <a href="" title="Edit" style="color: black">Edit</a>
                  @else
                    <a style="cursor: not-allowed;color: #cdcdcd" disabled>Edit</a>
                  @endif
                </td>
                <td class="center">
                  <form action="{{route('ads.destroy',$adsDatas->adsId)}}" method="POST">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                    <input type="hidden" name="_method" value="DELETE">
                    @if(Auth::user()->level==1 || $adsDatas->adsUserId == Auth::user()->id )
                      <button type="submit" class="btn btn-danger" onclick="return xacnhan('Bạn có chắc chắn muốn xóa hay không ?')" title="Delete">
                      <i class="fa fa-trash-o fa-fw"></i>Delete
                    </button>
                    @else
                    <a style="cursor: not-allowed; " disabled>
                      <button type="submit" class="btn btn-danger" style="cursor: not-allowed;color: #cdcdcd" disabled>
                        <i class="fa fa-trash-o fa-fw"></i>Delete
                      </button>
                    </a>
                    @endif
                  </form>
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
  <script src="admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script>
    $("div.alert").delay(2000).slideUp();
    $(document).ready(function() {
      $('#dataTables-examples').DataTable({
              responsive: true
      });
    });
    function xacnhan(msg)
    {
      if(window.confirm(msg))
      {
        return true;
      }
      return false;
    }
    $(document).ready(function(){  
      $("select option").val(function(i,v){
      $(this).siblings("[value='"+ v +"']").remove();
      });
    });
    function myfunction(){
        var x = document.getElementById("mySelect").value;

    }  
  
  </script>
  



@endsection

