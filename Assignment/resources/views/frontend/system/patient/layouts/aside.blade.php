@section('aside')
    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header (mini Sidebar mode) -->
        <div class="smini-visible-block">
            <div class="content-header bg-black-10">
                <!-- Logo -->
                <a class="link-fx font-size-lg text-dual" href="#">
                    <span class="text-muted">x</span><span class="text-dual">M</span>
                </a>
                <!-- END Logo -->
            </div>
        </div>
        <!-- END Side Header (mini Sidebar mode) -->
        <!-- Side Header (normal Sidebar mode) -->
        <div class="smini-hidden">
            <div class="content-header justify-content-lg-center">
                <!-- Logo -->
                <a class="link-fx font-size-lg text-dual" href="{{url('')}}" target="_blank">
                    <span class="text-danger">Online</span><span class="text-dual"> Medical</span>
                </a>
                <!-- END Logo -->
                <!-- Options -->
                <div class="d-lg-none">
                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                        <i class="fa fa-times-circle"></i>
                    </a>
                    <!-- END Close Sidebar -->
                </div>
                <!-- END Options -->
            </div>
        </div>
        <!-- END Side Header (normal Sidebar mode) -->

        <!-- Side Actions -->
        <div class="content-side content-side-full text-center bg-black-10">
            <div class="smini-hide">
                <a href="{{url('patient')}}">
                    @if($users->profile == null)
                <img class="img-avatar" src="{{asset('public/server/assets/photos/avatar15.jpg')}}" alt="">
                        @else
                        <img class="img-avatar" src="{{asset('public/uploads/profile/'.$users->profile)}}" alt="">
                    @endif
                </a>
                <div class="mt-2 mb-1 font-w600">{{$users->name}}</div>
                <a class="text-white-50 mr-1" href="{{url('patient/'.$users->id.'/edit-profile')}}">
                    <i class="fa fa-fw fa-user-md"></i>Edit Profile
                </a>
                <a class="text-white-50" title="Logout" href="{{route('logout')}}">
                    <i class="fa fa-fw fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </div>
        <!-- END Side Actions -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="{{url('patient')}}">
                        <i class="nav-main-link-icon fa fa-hospital"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-main-heading">Manage</li>
                <li class="nav-main-item @if(request()->segment('2')=='list-appointments-report' || request()->segment('2')=='make-an-appointment'|| request()->segment('2')=='new-appointment-list'|| request()->segment('2')=='list-appointments-wise-report'|| request()->segment('2')=='chat-with-hospital') open @endif">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                        <i class="nav-main-link-icon si si-briefcase"></i>
                        <span class="nav-main-link-name">Appointments & Report</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item open">
                            <a class="nav-main-link active" href="{{url('patient/list-appointments-report')}}">
                                <span class="nav-main-link-name">Appointments Wise Reports</span>
                            </a>
                        </li>
                        <li class="nav-main-item open">
                            <a class="nav-main-link active" href="{{url('patient/make-an-appointment')}}">
                                <span class="nav-main-link-name">Make New Appointments</span>
                            </a>
                        </li>
                        <li class="nav-main-item open">
                            <a class="nav-main-link active" href="{{url('patient/new-appointment-list')}}">
                                <span class="nav-main-link-name">New Appointments List</span>
                            </a>
                        </li>
                        <li class="nav-main-item open">
                            <a class="nav-main-link active" href="{{url('patient/chat-with-hospital')}}">
                                <span class="nav-main-link-name">Chat With Hospital</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- END Side Navigation -->
    </nav>
    <!-- END Sidebar -->
@endsection
