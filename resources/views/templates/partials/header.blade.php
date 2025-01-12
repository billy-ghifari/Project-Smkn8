<header class="topbar topbar-nav" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left m-auto ml-3 pl-1">
                        <!-- Notification -->

                        <!-- End Notification -->
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item d-none d-md-block">
                            <img src="/assets/images/dtc-blueicon.png" alt="" width="50px">
                        </li>
                    </ul>

                    <ul class="navbar-nav pt-3">
                        <li class="nav-item pr-5">
                            <a href="">
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item pr-5">
                            <a href="">
                                <p>Courses</p>
                            </a>
                        </li>
                        <li class="nav-item pr-5">
                            <a href="">
                                <p>Careers</p>
                            </a>
                        </li>
                        <li class="nav-item pr-5">
                            <a href="">
                                <p>Blog</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="">
                                <p>About Us</p>
                            </a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right m-auto">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="assets/images/users/profile-pic.jpg" alt="user" class="rounded-circle" width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span class="text-dark">Jason Doe</span> <i data-feather="chevron-down" class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="user" class="svg-icon mr-2 ml-1"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="credit-card" class="svg-icon mr-2 ml-1"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="mail" class="svg-icon mr-2 ml-1"></i>
                                    Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="settings" class="svg-icon mr-2 ml-1"></i>
                                    Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="power" class="svg-icon mr-2 ml-1"></i>
                                    Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="pl-4 p-3"><a href="javascript:void(0)" class="btn btn-sm btn-info">View
                                        Profile</a></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>









        <!-- <header class="topbar topbar-head fixed-top d-flex" data-navbarbg="skin6" style="background-color:white; height:95px; position:fixed; top:0; ">
    <div class="header justify-content-between container">
        <div class="row" style="height: 450px;">
            <div class="col-3" style="margin-top: 25px;">
                <img src="/assets/images/dtc-blueicon.png" alt="" style="width: 50px; height: 50px">
            </div>
            <div class="col-5" style="margin-top:27px ;">
                <ul class="nav justify-content-center">
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="#" style="color: #5B5B5B;">Home</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="/course" style="color: #5B5B5B;">Courses</a>
                    </li>
                    <li class=" nav-item mr-4">
                        <a class="nav-link" href="#" style="color: #5B5B5B;">Blog</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="#" style="color: #5B5B5B;">About Us</a>
                    </li>

                </ul>
            </div>
            <div class="col-4 pt-3" style="padding-left: 40px;">
                <li class="nav dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void()" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="assets/images/users/profile-pic.jpg" alt="user" class="rounded-circle" width="40">
                        <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span class="text-dark" style="padding-right: 2rem;">{{session('name')}}</span> <i data-feather="chevron-down" class="svg-icon"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                        <a class="dropdown-item" href="javascript:void(0)"><i data-feather="user" class="svg-icon mr-2 ml-1"></i>
                            My Profile</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i data-feather="credit-card" class="svg-icon mr-2 ml-1"></i>
                            My Balance</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i data-feather="mail" class="svg-icon mr-2 ml-1"></i>
                            Inbox</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)"><i data-feather="settings" class="svg-icon mr-2 ml-1"></i>
                            Account Setting</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/logout"><i data-feather="power" class="svg-icon mr-2 ml-1"></i>
                            Logout <form action="/logout" method="post">@csrf</form></a>
                        <div class="dropdown-divider"></div>
                        <div class="pl-4 p-3"><a href="javascript:void(0)" class="btn btn-sm btn-info">View
                                Profile</a></div>
                    </div>
                </li>
            </div>
        </div>


    </div>
</header> -->