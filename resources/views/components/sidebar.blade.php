
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
                    <a href="page_widgets_media.html"><i class="gi gi-film sidebar-nav-icon"></i>Media</a>
                </li>
                <li>
                    <a href="page_widgets_links.html"><i class="gi gi-link sidebar-nav-icon"></i>Links</a>
                </li>
                <li class="sidebar-header">
                    <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a></span>
                    <span class="sidebar-header-title">Design Kit</span>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator"></i><i class="gi gi-certificate sidebar-nav-icon"></i>User Interface</a>
                    <ul>
                        <li>
                            <a href="page_ui_grid_blocks.html">Grid &amp; Blocks</a>
                        </li>
                        <li>
                            <a href="page_ui_draggable_blocks.html">Draggable Blocks</a>
                        </li>
                        <li>
                            <a href="page_ui_typography.html">Typography</a>
                        </li>
                        <li>
                            <a href="page_ui_buttons_dropdowns.html">Buttons &amp; Dropdowns</a>
                        </li>
                        <li>
                            <a href="page_ui_navigation_more.html">Navigation &amp; More</a>
                        </li>
                        <li>
                            <a href="page_ui_horizontal_menu.html">Horizontal Menu</a>
                        </li>
                        <li>
                            <a href="page_ui_progress_loading.html">Progress &amp; Loading</a>
                        </li>
                        <li>
                            <a href="page_ui_preloader.html">Page Preloader</a>
                        </li>
                        <li>
                            <a href="page_ui_color_themes.html">Color Themes</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator"></i><i class="gi gi-notes_2 sidebar-nav-icon"></i>Forms</a>
                    <ul>
                        <li>
                            <a href="page_forms_general.html">General</a>
                        </li>
                        <li>
                            <a href="page_forms_components.html">Components</a>
                        </li>
                        <li>
                            <a href="page_forms_validation.html">Validation</a>
                        </li>
                        <li>
                            <a href="page_forms_wizard.html">Wizard</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator"></i><i class="gi gi-table sidebar-nav-icon"></i>Tables</a>
                    <ul>
                        <li>
                            <a href="page_tables_general.html">General</a>
                        </li>
                        <li>
                            <a href="page_tables_responsive.html">Responsive</a>
                        </li>
                        <li>
                            <a href="page_tables_datatables.html">Datatables</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator"></i><i class="gi gi-cup sidebar-nav-icon"></i>Icon Sets</a>
                    <ul>
                        <li>
                            <a href="page_icons_fontawesome.html">Font Awesome</a>
                        </li>
                        <li>
                            <a href="page_icons_glyphicons_pro.html">Glyphicons Pro</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator"></i><i class="gi gi-show_big_thumbnails sidebar-nav-icon"></i>Page Layouts</a>
                    <ul>
                        <li>
                            <a href="page_layout_static.html">Static</a>
                        </li>
                        <li>
                            <a href="page_layout_static_fixed_footer.html">Static + Fixed Footer</a>
                        </li>
                        <li>
                            <a href="page_layout_fixed_top.html">Fixed Top Header</a>
                        </li>
                        <li>
                            <a href="page_layout_fixed_top_footer.html">Fixed Top Header + Footer</a>
                        </li>
                        <li>
                            <a href="page_layout_fixed_bottom.html">Fixed Bottom Header</a>
                        </li>
                        <li>
                            <a href="page_layout_fixed_bottom_footer.html">Fixed Bottom Header + Footer</a>
                        </li>
                        <li>
                            <a href="page_layout_static_main_sidebar_partial.html">Partial Main Sidebar</a>
                        </li>
                        <li>
                            <a href="page_layout_static_main_sidebar_visible.html">Visible Main Sidebar</a>
                        </li>
                        <li>
                            <a href="page_layout_static_alternative_sidebar_partial.html">Partial Alternative Sidebar</a>
                        </li>
                        <li>
                            <a href="page_layout_static_alternative_sidebar_visible.html">Visible Alternative Sidebar</a>
                        </li>
                        <li>
                            <a href="page_layout_static_no_sidebars.html">No Sidebars</a>
                        </li>
                        <li>
                            <a href="page_layout_static_both_partial.html">Both Sidebars Partial</a>
                        </li>
                        <li>
                            <a href="page_layout_static_animated.html">Animated Sidebar Transitions</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-header">
                    <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a></span>
                    <span class="sidebar-header-title">Develop Kit</span>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator"></i><i class="fa fa-wrench sidebar-nav-icon"></i>Components</a>
                    <ul>
                        <li>
                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>3 Level Menu</a>
                            <ul>
                                <li>
                                    <a href="#">Link 1</a>
                                </li>
                                <li>
                                    <a href="#">Link 2</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="page_comp_maps.html">Maps</a>
                        </li>
                        <li>
                            <a href="page_comp_charts.html">Charts</a>
                        </li>
                        <li>
                            <a href="page_comp_gallery.html">Gallery</a>
                        </li>
                        <li>
                            <a href="page_comp_carousel.html">Carousel</a>
                        </li>
                        <li>
                            <a href="page_comp_calendar.html">Calendar</a>
                        </li>
                        <li>
                            <a href="page_comp_animations.html">CSS3 Animations</a>
                        </li>
                        <li>
                            <a href="page_comp_syntax_highlighting.html">Syntax Highlighting</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator"></i><i class="gi gi-brush sidebar-nav-icon"></i>Ready Pages</a>
                    <ul>
                        <li>
                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Errors</a>
                            <ul>
                                <li>
                                    <a href="page_ready_400.html">400</a>
                                </li>
                                <li>
                                    <a href="page_ready_401.html">401</a>
                                </li>
                                <li>
                                    <a href="page_ready_403.html">403</a>
                                </li>
                                <li>
                                    <a href="page_ready_404.html">404</a>
                                </li>
                                <li>
                                    <a href="page_ready_500.html">500</a>
                                </li>
                                <li>
                                    <a href="page_ready_503.html">503</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Get Started</a>
                            <ul>
                                <li>
                                    <a href="page_ready_blank.html">Blank</a>
                                </li>
                                <li>
                                    <a href="page_ready_blank_alt.html">Blank Alternative</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="page_ready_search_results.html">Search Results (4)</a>
                        </li>
                        <li>
                            <a href="page_ready_article.html">Article</a>
                        </li>
                        <li>
                            <a href="page_ready_user_profile.html">User Profile</a>
                        </li>
                        <li>
                            <a href="page_ready_contacts.html">Contacts</a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>e-Learning</a>
                            <ul>
                                <li>
                                    <a href="page_ready_elearning_courses.html">Courses</a>
                                </li>
                                <li>
                                    <a href="page_ready_elearning_course_lessons.html">Course - Lessons</a>
                                </li>
                                <li>
                                    <a href="page_ready_elearning_course_lesson.html">Course - Lesson Page</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Message Center</a>
                            <ul>
                                <li>
                                    <a href="page_ready_inbox.html">Inbox</a>
                                </li>
                                <li>
                                    <a href="page_ready_inbox_compose.html">Compose Message</a>
                                </li>
                                <li>
                                    <a href="page_ready_inbox_message.html">View Message</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="page_ready_chat.html">Chat</a>
                        </li>
                        <li>
                            <a href="page_ready_timeline.html">Timeline</a>
                        </li>
                        <li>
                            <a href="page_ready_tickets.html">Tickets</a>
                        </li>
                        <li>
                            <a href="page_ready_tasks.html">Tasks</a>
                        </li>
                        <li>
                            <a href="page_ready_faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="page_ready_pricing_tables.html">Pricing Tables</a>
                        </li>
                        <li>
                            <a href="page_ready_invoice.html">Invoice</a>
                        </li>
                        <li>
                            <a href="page_ready_forum.html">Forum (3)</a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Login, Register &amp; Lock</a>
                            <ul>
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="login_full.html">Login (Full Background)</a>
                                </li>
                                <li>
                                    <a href="login_alt.html">Login 2</a>
                                </li>
                                <li>
                                    <a href="login.html#reminder">Password Reminder</a>
                                </li>
                                <li>
                                    <a href="login_alt.html#reminder">Password Reminder 2</a>
                                </li>
                                <li>
                                    <a href="login.html#register">Register</a>
                                </li>
                                <li>
                                    <a href="login_alt.html#register">Register 2</a>
                                </li>
                                <li>
                                    <a href="page_ready_lock_screen.html">Lock Screen</a>
                                </li>
                                <li>
                                    <a href="page_ready_lock_screen_alt.html">Lock Screen 2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- END Sidebar Navigation -->
        </div>
        <!-- END Sidebar Content -->
    </div>
    <!-- END Wrapper for scrolling functionality -->
</div>
<!-- END Main Sidebar -->