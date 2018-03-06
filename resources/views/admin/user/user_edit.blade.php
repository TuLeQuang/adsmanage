@extends('admin.layout.index')
@section('title')
    <title>Edit User</title>
@endsection
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
                <form action="admin/user/user_edit/{{$user->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Name*</label>
                        <input class="form-control" name="name" placeholder="Please Enter Name" value="{{$user->name}}" required="" />
                    </div>
                    <div class="form-group">
                        <label>Email*</label>
                        <input type="email" class="form-control" name="email" placeholder="Please Enter Email" value="{{$user->email}}" readonly="" />
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="changePassword" onchange="enPass()" name="changePassword">
                        <label>Password*</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Please Enter Password" disabled=""/>
                    </div>
                    <div class="form-group">
                        <label>RePassword*</label>
                        <input type="password" class="form-control" id="rePassword" name="passwordAgain" placeholder="Please Enter RePassword" disabled="" />
                    </div>
                    @if(Auth::check() && Auth::user()->level==1)
                        <div class="form-group">
                            <label>User Level*</label>
                            <label class="radio-inline">
                                <input name="level" value="1"  type="radio"
                                @if($user->level==1)
                                    {{"checked"}}
                                @endif>Admin
                            </label>
                            <label class="radio-inline">
                                <input name="level" value="0" checked="" type="radio"
                                @if($user->level==0)
                                    {{"checked"}}
                                @endif>Member
                            </label>
                            <label class="radio-inline">
                            <input name="level" value="2" type="radio"
                            @if($user->level==2)
                                {{"checked"}}
                                    @endif>Manager
                            </label>
                        </div>
                    @elseif(Auth::check() && Auth::user()->level==2)
                        <div class="form-group">
                            <label>User Level*</label>
                            <label class="radio-inline">
                                <input name="level" value="1"  type="radio"
                                @if($user->level==1)
                                    {{"checked"}}
                                        @endif>Admin
                            </label>
                            <label class="radio-inline">
                                <input name="level" value="0" type="radio"
                                @if($user->level==0)
                                    {{"checked"}}
                                        @endif>Member
                            </label>
                            <label class="radio-inline">
                            <input name="level" value="2" checked="" type="radio"
                            @if($user->level==2)
                                {{"checked"}}
                                    @endif>Manager
                            </label>
                        </div>
                    @else
                        <div class="form-group" disabled>
                            <label>User Level*</label>
                            <label class="radio-inline">
                                <input name="level" value="1"  type="radio"
                                @if($user->level==1)
                                    {{"checked"}}
                                @endif>Admin
                            </label>
                            <label class="radio-inline">
                                <input name="level" value="0" checked="" type="radio"
                                @if($user->level==0)
                                    {{"checked"}}
                                @endif>Member
                            </label>
                            <label class="radio-inline">
                                <input name="level" value="2" type="radio"
                                @if($user->level==2)
                                    {{"checked"}}
                                        @endif>Manager
                            </label>
                        </div>
                    @endif
                    <button type="submit" class="btn btn-default" title="Edit User">Edit</button>
                    <button type="reset" class="btn btn-default" title="Reset">Reset</button>
                    
                        @if(Auth::user()->level==1)
                        <a href="{{asset('admin/user/user_list/')}}" style="text-decoration: none;color: black" title="Back">
                            <button type="button" class="btn btn-default">Back</button></a>
                        @else
                        <a href="admin/user/user_list_member/{{Auth::user()->id}}" style="text-decoration: none;color: black" title="Back">
                            <button type="button" class="btn btn-default">Back</button>
                        </a>
                        @endif
                        
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

        function enPass(){
            var passCheck= document.getElementById('changePassword');
            if(passCheck.checked){
                document.getElementById('password').disabled=false;
                document.getElementById('rePassword').disabled=false;
            }
            else {
                document.getElementById('password').disabled=true;
                document.getElementById('rePassword').disabled=true;
            }
        }
    </script>
@endsection
