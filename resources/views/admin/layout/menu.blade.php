 <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            
            <li>
                @if(Auth::user()->level==1 || Auth::user()->level==2)
                <a href="admin/user/user_list" title="User List"><i class="fa fa-user fa-fw"></i>User</a>
                @else
                <a href="admin/user/user_list_member/{{Auth::user()->id}}" title="User"><i class="fa fa-user fa-fw"></i>User</a>
                @endif
            </li>
            <li>
                <a href="{{asset('admin/template')}}" title="Template"><i class="fa fa-dashboard fa-fw"></i>Template</a>
            </li>
            
            <li>
                <a href="{{asset('admin/ads')}}" title="Ads"><i class="fa fa-newspaper-o fa-fw"></i> Ads</a>
            </li>
            <li>
                <a href="{{asset('admin/import')}}" title="Import"><i class="fa fa-edit fa-fw"></i>Import</a>
            </li>
            <li>
                <a href="{{asset('admin/demo/')}}" title="Demo Ads" target="_blank"><i class="fa fa-edit fa-fw"></i>Demo Ads</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>