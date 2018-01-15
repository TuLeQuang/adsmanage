@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class=content"container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>{{$user->name}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
                
            <div class="col-lg-7" style="padding-bottom:120px">
                
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
                @endif
            
                @if ( Session::has('flash_message') )
                    <div class="alert alert-danger {{ Session::get('flash_type') }}">
                        {{ Session::get('flash_message') }}
                    </div>
                @endif
                <form action="admin/user/user_edit/{{$user->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="name" placeholder="Please Enter Name" value="{{$user->name}}"/>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Please Enter Email" value="{{$user->email}}" readonly="" />
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="changePassword" name="changePassword">
                        <label>Password</label>
                        <input type="password" class="form-control password" name="password" placeholder="Please Enter Password" disabled=""/>
                    </div>
                    <div class="form-group">
                        <label>RePassword</label>
                        <input type="password" class="form-control password" name="passwordAgain" placeholder="Please Enter RePassword" disabled="" />
                    </div>
                    <div class="form-group">
                        <label>User Level</label>
                        <label class="radio-inline">
                            <input name="level" value="1" checked="" type="radio"
                            @if($user->level==1)
                                {{"checked"}}
                            @endif>
                            Admin
                        </label>
                        <label class="radio-inline">
                            <input name="level" value="0" type="radio"
                            @if($user->level==0)
                                {{"checked"}}
                            @endif>Member
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Edit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button class="btn btn-default"><a href="{{asset('admin/user/user_list/')}}" style="text-decoration: none;color: black">Back</a></button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#changePassword').change(function() {
                if($(this).is(":checked"))
                {
                    $(".password").removeAttr('disabled');
                }
                else
                {
                    $(".password").attr('disabled','');
                }
            });
        });
        $("div.alert").delay(3000).slideUp();    
    </script>
@endsection
