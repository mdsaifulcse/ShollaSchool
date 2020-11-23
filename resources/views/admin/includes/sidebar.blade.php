<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{url('/home')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>

            <li>
                <a href="#"><i class="fa fa-sliders" aria-hidden="true"></i> Slider <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/add-slider')}}">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Slider</a>
                    </li>
                    <li>
                        <a href="{{url('/manage-slider')}}">
                            <i class="fa fa-wrench" aria-hidden="true"></i> Manage Slider</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-tags"></i> Notice<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/add-notice')}}">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Notice</a>
                    </li>
                    <li>
                        <a href="{{url('/manage-notice')}}">
                            <i class="fa fa-wrench" aria-hidden="true"></i> Manage Notice</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-book" aria-hidden="true"></i> Lecture<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/add-lecture')}}">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Lecture</a>
                    </li>
                    <li>
                        <a href="{{url('/manage-lecture')}}">
                            <i class="fa fa-wrench" aria-hidden="true"></i> Manage Lecture</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-sun-o" aria-hidden="true"></i> Routine<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/add-routine')}}">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Routine</a>
                    </li>
                    <li>
                        <a href="{{url('/manage-routine')}}">
                            <i class="fa fa-wrench" aria-hidden="true"></i> Manage Routine</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-university" aria-hidden="true"></i> Our Institute<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/manage-rules-history-property-info')}}">
                            <i class="fa fa-wrench" aria-hidden="true"></i> Manage School Info</a>
                    </li>
                    <li>
                        <a href="{{url('/manage-about-school')}}">
                            <i class="fa fa-wrench" aria-hidden="true"></i> Manage About School</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Teachers<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/add-teacher')}}">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Teacher</a>
                    </li>
                    <li>
                        <a href="{{url('/teacher-education')}}">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Educational</a>
                    </li>
                    <li>
                        <a href="{{url('/manage-teacher')}}">
                            <i class="fa fa-wrench" aria-hidden="true"></i> Manage teacher</a>
                    </li>
                    <li>
                        <a href="{{url('/manage-education')}}">
                            <i class="fa fa-wrench" aria-hidden="true"></i> Manage Education</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Administrator<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/add-administrator')}}">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Administrator</a>
                    </li>
                    <li>
                        <a href="{{url('/manage-administrator')}}">
                            <i class="fa fa-wrench" aria-hidden="true"></i> Manage Administrator</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Stuff <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/add-stuff')}}">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Stuff</a>
                    </li>
                    <li>
                        <a href="{{url('/manage-stuff')}}">
                            <i class="fa fa-wrench" aria-hidden="true"></i> Manage Stuff</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> Speech<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/manage-speech')}}">
                            <i class="fa fa-wrench" aria-hidden="true"></i> Manage Speech</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-address-card-o" aria-hidden="true"></i> Meritorious <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/add-meritorioue-student')}}">
                            <i class="fa fa-user-plus" aria-hidden="true"></i> Add Meritorious Student</a>
                    </li>
                    <li>
                        <a href="{{url('/manage-meritorious')}}">
                            <i class="fa fa-wrench" aria-hidden="true"></i> Manage Meritorious</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="#"><i class="fa fa-puzzle-piece" aria-hidden="true"></i> School Overview<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/manage-Overview')}}">
                            <i class="fa fa-wrench" aria-hidden="true"></i> Manage Overview</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-users" aria-hidden="true"></i> Students <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/add-student')}}">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Student</a>
                    </li>
                    <li>
                        <a href="{{url('/manage-school-student')}}">
                            <i class="fa fa-wrench" aria-hidden="true"></i> Manage School Student</a>
                    </li>
                    <li>
                        <a href="{{url('/manage-college-student')}}">
                            <i class="fa fa-wrench" aria-hidden="true"></i> Manage College Student</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Result<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/add-result')}}">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Result</a>
                    </li>
                    <li>
                        <a href="{{url('/manage-result')}}">
                            <i class="fa fa-wrench" aria-hidden="true"></i> Manage Result</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-book" aria-hidden="true"></i> Academic Content<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <li>
                        <a href="{{url('/manage-academic-content')}}">
                            <i class="fa fa-edit" aria-hidden="true"></i> Manage Academic-Content</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i> Gallery<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/add-photo')}}">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Photo</a>
                    </li>
                    <li>
                        <a href="{{url('/manage-photo')}}">
                            <i class="fa fa-wrench" aria-hidden="true"></i> Manage Photo</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-gratipay" aria-hidden="true"></i> Alumni Student<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/add-alumni-student')}}">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Alumni Student</a>
                    </li>
                    <li>
                        <a href="{{url('/manage-alumni-student')}}">
                            <i class="fa fa-wrench" aria-hidden="true"></i> Manage Alumni Student</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/manage-contact-info')}}">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Update Contact Info</a>
                    </li>
                    <li>
                        <a href="{{url('/message-list')}}">
                            <i class="fa fa-envelope" aria-hidden="true"></i> Message List</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->
            </li>
            
            <li>
                <a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Admin Setting<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/update-admin')}}">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update Admin</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Setting<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('class-of-school.index')}}">
                            <i class="fa fa-folder" aria-hidden="true"></i> Class / Section</a>
                    </li>
                    <li>
                        <a href="{{route('designations.index')}}">
                            <i class="fa fa-folder" aria-hidden="true"></i> Designations</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>