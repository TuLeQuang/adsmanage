 <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            
            <li>
                @if(Auth::user()->level==1)
                <a href="admin/user/user_list"><i class="fa fa-dashboard fa-fw"></i>User</a>
                @else
                <a href="admin/user/user_list_member/{{Auth::user()->id}}"><i class="fa fa-dashboard fa-fw"></i>User</a>
                @endif
            </li>
            <li>
                <a href="{{asset('admin/template')}}"><i class="fa fa-dashboard fa-fw"></i>Template</a>
            </li>
           {{-- <li>
                <a href="#"><i class="fa fa-users fa-fw"></i>User<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                    
                    <li>
                        <a href="admin/user/user_add">Add User</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>--}}
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>