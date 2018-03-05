@extends('admin.layout.index')
@section('title')
  <title>Template</title>
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
            {{--<th style="text-align: center;">Review</th>--}}
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
             <!--  <td>@{{ item.id }}</td>
              <td>@{{ item.User_Id }}</td>
              <td>@{{ item.Template Name }}</td>
              <td>@{{ item.Create At }}</td>
              <td>@{{ item.Updated At }}</td> -->
             <!--  <td>
               <div class="review" style="background-image:url({{$templates[$i]['images']['name']}});"></div>
             </td> -->

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
<!--         <div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">Chỉnh sửa sản phẩm</h4>
                    </div>
                    <div class="modal-body">
                        <form method="POST" enctype="multipart/form-data" v-on:submit.prevent="updateItem(fillItem.id)">
                            <div class="form-group">
                                <label for="name">Id:</label>
                                <input type="text" name="name" class="form-control" v-model="fillItem.name" />
                                <span v-if="formErrorsUpdate['id']" class="error text-danger">@{{ formErrorsUpdate['id'] }}</span>
                            </div>

                            <div class="form-group">
                                <label for="price">User_Id:</label>
                                <input type="text" name="price" class="form-control" v-model="fillItem.price" />
                                <span v-if="formErrorsUpdate['User_Id']" class="error text-danger">@{{ formErrorsUpdate['User_Id'] }}</span>
                            </div>

                            <div class="form-group">
                                <label for="content">Template Name:</label>
                                <textarea name="content" class="form-control" v-model="fillItem.content"></textarea>
                                <span v-if="formErrorsUpdate['Template Name']" class="error text-danger">@{{ formErrorsUpdate['Template Name'] }}</span>
                            </div>

                            <div class="form-group">
                                <label for="content">Create At:</label>
                                <textarea name="content" class="form-control" v-model="fillItem.content"></textarea>
                                <span v-if="formErrorsUpdate['Create At']" class="error text-danger">@{{ formErrorsUpdate['Create At'] }}</span>
                            </div>

                            <div class="form-group">
                                <label for="content">Updated At:</label>
                                <textarea name="content" class="form-control" v-model="fillItem.content"></textarea>
                                <span v-if="formErrorsUpdate['Updated At']" class="error text-danger">@{{ formErrorsUpdate['Updated At'] }}</span>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Cập nhật sản phẩm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->

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
@section('js')
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/vue.resource/0.9.3/vue-resource.min.js"></script>

    <script type="text/javascript" src="{{ Asset('js/product.js') }}"></script>
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
