@extends('admin.layout.index')
@section('title')
  <title>Ads List</title>
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
          @if(Auth::user()->level==1 || Auth::user()->level==0)
            <button class="btn btn-success" data-toggle="modal" data-target="#myModal1">&#43; Add Ads</button>
          @endif
          <!-- Modal -->
          <div class="modal fade" id="myModal1" role="dialog">
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
                      @foreach($templateDatas as $templateData)
                        <tr class="odd gradeX" align="center">
                          <td>{{$templateData->id}}</td>
                          <td>{{$templateData->name}}</td>
                          <td class="center"><i class="fa fa-pencil fa-fw"></i>
                            <a href="{{route('template.show',$templateData->id)}}" title="Detail">Detail</a>
                          </td>
                          <td class="center"><i class="fa fa-edit fa-fw"></i>
                            <a href="{{route('ads.show',$templateData->id)}}" title="Chọn Template">Chọn</a>
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
              <th style="text-align: center;">Stt</th>
              <th style="text-align: center;">Người Tạo</th>
              <th style="text-align: center;">Mẫu Template</th>
              <th style="text-align: center;">Tên Ads</th>
              <th style="text-align: center;">Nhãn Hàng</th>
              <th style="text-align: center;">Ngày Tạo</th>
              <th style="text-align: center;">Detail</th>
              @if(Auth::user()->level==1 || Auth::user()->level==0)
               {{-- <th style="text-align: center;">Edit</th>--}}
                <th style="text-align: center;">Delete</th>
              @endif

            </tr>
          </thead>
          <tbody id="dataTables">
            @foreach($adsDatas as $key=>$adsData)
              <tr class="odd gradeX" align="center">
                <td>{{$key+1}}</td>
               {{-- <td style="display: none">{{$adsDatas->adsUserId}}</td>
                <td style="display: none">{{$adsDatas->adstemplatesId}}</td>--}}
                @if($adsData->adsUserId==$adsData->userId)
                  <td>{{$adsData->userName}}</td>
                @endif 
                @if($adsData->adstemplatesId==$adsData->templatesId)
                  <td>{{$adsData->templateName}}</td>
                @endif
                <td>{{$adsData->adsName}}</td>
                <td>{{$adsData->brand}}</td>
                <td>{{$adsData->created_at}}</td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i>
                  <a href="{{route('ads.edit',$adsData->adsId)}}" title="Detail">Detail</a>
                </td>

                @if(Auth::user()->level==1 || Auth::user()->level==0)
                  {{--<td class="center" >
                    <i class="fa fa-pencil fa-fw"></i>
                    @if(Auth::user()->level==1 || $adsDatas->adsUserId == Auth::user()->id)
                      <a href="{{route('ads.edit',$adsDatas->adsId)}}" title="Edit">Edit</a>
                    @else
                      <span href="#" style="cursor: not-allowed;color: #cdcdcd" disabled>Edit</span>
                    @endif
                  </td>--}}
                  <td class="center">
                    <form action="{{route('ads.destroy',$adsData->adsId)}}" method="POST">
                      <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                      <input type="hidden" name="_method" value="DELETE">
                      @if(Auth::user()->level==1 || $adsData->adsUserId == Auth::user()->id )
                        <button type="submit" class="button-delete" onclick="return xacnhan('Bạn có chắc chắn muốn xóa hay không ?')" title="Delete">
                        <i class="fa fa-trash-o fa-fw"></i>Delete
                      </button>
                      @else
                      <a style="cursor: not-allowed; " disabled>
                        <button type="submit" class="button-delete" style="cursor: not-allowed;color: #cdcdcd" disabled>
                          <i class="fa fa-trash-o fa-fw"></i>Delete
                        </button>
                      </a>
                      @endif
                    </form>
                  </td>
                @endif
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

/*    $(document).ready(function(){
      $("select option").val(function(i,v){
      $(this).siblings("[value='"+ v +"']").remove();
      });
    });
    */
  </script>
@endsection

