@extends('admin.layout.index')
@section('title')
   <title>Add User</title>
@endsection
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>Add</small>
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

                <form action="admin/user/user_add" method="POST" id="form_input" >
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Name*</label>
                        <input class="form-control" name="name" id="name" placeholder="Please Enter Name" required >
                    </div>
                    <div class="form-group">
                        <label>Email*</label>
                        <input type="email" class="form-control" name="email" placeholder="Please Enter Email" required/>
                    </div>
                    <div class="form-group">
                        <label>Password*</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Please Enter Password" required/>
                    </div>
                    <div class="form-group">
                        <label>RePassword*</label>
                        <input type="password" class="form-control" id="passwordAgain" name="passwordAgain" placeholder="Please Enter RePassword" required/>                        
                    </div>
                    <div class="form-group">
                        <label>User Level*</label>
                        <label class="radio-inline">
                            <input name="level" value="1"  type="radio">Admin
                        </label>
                        <label class="radio-inline">
                            <input name="level" value="0" checked="" type="radio">Member
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default" title="User Add">User Add</button>
                    <button type="reset" class="btn btn-default" title="Reset">Reset</button>
                    <a href="{{asset('admin/user/user_list/')}}" style="text-decoration: none;color: black">
                        <button type="button" class="btn btn-default" title="Back">Back</button>
                    </a>
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
        $("div.alert").delay(2000).slideUp();

    </script>
@endsection