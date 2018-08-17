
<!-- Main Sidebar -->
<div id="sidebar">
    <!-- Wrapper for scrolling functionality -->
    <div class="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Brand -->
            <a href="index.html" class="sidebar-brand">
                <i class="gi gi-flash"></i><strong>Sir</strong>Campus
            </a>
            <!-- END Brand -->

            <!-- User Info -->
            <div class="sidebar-section sidebar-user clearfix">
                <div class="sidebar-user-avatar">
                    <a href="page_ready_user_profile.html">
                        <img src="{{url('img/placeholders/avatars/avatar2.jpg')}}" alt="avatar">
                    </a>
                </div>
                
                <div class="sidebar-user-name">{{ucwords(Auth::guard('staff')->user()->name)}}</div>
                <div class="sidebar-user-links">
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Profile"><i class="gi gi-user"></i></a>
                    <a href="#" class="logout" data-toggle="tooltip" data-placement="bottom" title="Logout">    <i class="gi gi-exit"></i></a>
                </div>
            </div>
            <!-- END User Info -->

            <!-- Sidebar Navigation -->
            <ul class="sidebar-nav">
                <li>
                    <a href="{{route('staff')}}" class="{{ Request::is('staff') ? 'active' : '' }}"><i class="gi gi-stopwatch sidebar-nav-icon"></i>Dashboard</a>
                </li>
                <li class="sidebar-header">
                    <span class="sidebar-header-options clearfix">
                        <a href="javascript:void(0)" data-toggle="tooltip" title="The menu below only for manage University data"><i class="gi gi-flash"></i></a></span>
                    <span class="sidebar-header-title">University Data</span>
                </li>
                <li>
                    <a href="{{route('student.index')}}" class="{{ Request::is('staff/student*') ?  'active' : '' }}"><i class="gi gi-charts sidebar-nav-icon"></i>Students</a>
                </li>
                <li>
                    <a href="{{route('course.index')}}" class="{{ Request::is('staff/course*') ?  'active' : '' }}"><i class="gi gi-book sidebar-nav-icon"></i>Course</a>
                </li>
                <li>
                    <a href="{{route('lecture.index')}}" class="{{ Request::is('staff/lecture*') ?  'active' : '' }}"><i class="gi gi-user sidebar-nav-icon"></i>Lecturers</a>
                </li>
                <li>
                    <a href="{{route('class.index')}}" class="{{ Request::is('staff/class*') ?  'active' : '' }}"><i class="gi gi-bullhorn sidebar-nav-icon"></i>Class</a>
                </li>
                <li>
                    <a href="{{route('schedule.index')}}" class="{{ Request::is('staff/schedule*') ?  'active' : '' }}"><i class="gi gi-stopwatch sidebar-nav-icon"></i>Schedule</a>
                </li>
            </ul>
            <!-- END Sidebar Navigation -->
        </div>
        <!-- END Sidebar Content -->
    </div>
    <!-- END Wrapper for scrolling functionality -->
</div>
<!-- END Main Sidebar -->