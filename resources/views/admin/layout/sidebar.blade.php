<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <img
                        src="{{asset('backend/assets/img/kaiadmin/oishi_admin.jfif')}}"
                        alt="navbar brand"
                        class="navbar-brand"
                        height="20"/>
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item active">
                    <a
                            data-bs-toggle="collapse"
                            href="#dashboard"
                            class="collapsed"
                            aria-expanded="false"
                    >
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="../demo1/index.html">
                                    <span class="sub-item">Profile</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                    <h4 class="text-section">Components</h4>
                </li>
                <li class="nav-item">
                    @isset(auth()->user()->role->permission['permission']['setteing']['list'])
                    <a data-bs-toggle="collapse" href="#base">
                        <i class="fas fa-layer-group"></i>
                        <p>Setting</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{route('branch.view')}}">
                                    <span class="sub-item">View Branch</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('branch.add')}}">
                                    <span class="sub-item">Create Branch</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{route('country.view')}}">
                                    <span class="sub-item">View Country</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('country.add')}}">
                                    <span class="sub-item">Create Country</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    @endisset
                </li>




                <li class="nav-item">
                    @isset(auth()->user()->role->permission['permission']['createuser']['list'])
                    <a data-bs-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-th-list"></i>
                        <p>Create User</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav nav-collapse">

                            <li>
                                <a href="{{route('subadmin.index')}}">
                                    <span class="sub-item">all User</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('subadmin.create')}}">
                                    <span class="sub-item">Create User</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    @endisset
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#forms">
                        <i class="fas fa-pen-square"></i>
                        <p>Passenger Form</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{route('userinfo.add')}}">
                                    <span class="sub-item"> Create Passenger Form</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('userinfo.view')}}">
                                    <span class="sub-item"> All Passenger</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#tables">
                        <i class="fas fa-table"></i>
                        <p>Tables</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="tables/tables.html">
                                    <span class="sub-item">Basic Table</span>
                                </a>
                            </li>
                            <li>
                                <a href="tables/datatables.html">
                                    <span class="sub-item">Datatables</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    @isset(auth()->user()->role->permission['permission']['rolemanagement']['list'])
                    <a data-bs-toggle="collapse" href="#charts">
                        <i class="far fa-chart-bar"></i>
                        <p>Role Management</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="charts">

                        <ul class="nav nav-collapse">

                            <li>

                                <a href="{{route('role.index')}}">
                                    <span class="sub-item">All Role</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('role.create')}}">
                                    <span class="sub-item">Add Role</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{route('permission.create')}}">
                                    <span class="sub-item">Add Permission</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('permission.index')}}">
                                    <span class="sub-item">All Permission</span>
                                </a>
                            </li>
                        </ul>

                    </div>
                    @endisset
                </li>


            </ul>
        </div>
    </div>




</div>