 <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            
            <li>
                @if(Auth::user()->level==1)
                <a href="admin/user/user_list" title="User List"><i class="fa fa-user fa-fw"></i>User</a>
                @else
                <a href="admin/user/user_list_member/{{Auth::user()->id}}" title="User List"><i class="fa fa-user fa-fw"></i>User</a>
                @endif
            </li>
            <li>
                <a href="{{asset('admin/template')}}" title="Template"><i class="fa fa-dashboard fa-fw"></i>Template</a>
            </li>
            <li>
                <a href="{{asset('admin/import')}}" title="Template"><i class="fa fa-dashboard fa-fw"></i>Import</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>