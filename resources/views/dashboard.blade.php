<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta
            content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
            name="viewport"
    />
    <link
            rel="icon"
            href="assets/img/kaiadmin/favicon.ico"
            type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: { families: ["Public Sans:300,400,500,600,700"] },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["{{asset('backend/assets/css/fonts.min.css')}}"],
            },
            active: function () {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/css/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/css/kaiadmin.min.css')}}" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
</head>
<body>
<div class="wrapper">
    <!-- Sidebar -->
    <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
                <a href="index.html" class="logo">
                    <img
                            src="assets/img/kaiadmin/logo_light.svg"
                            alt="navbar brand"
                            class="navbar-brand"
                            height="20"
                    />
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
                                        <span class="sub-item">Dashboard 1</span>
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
                        <a data-bs-toggle="collapse" href="#sidebarLayouts">
                            <i class="fas fa-th-list"></i>
                            <p>Sidebar Layouts</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="sidebarLayouts">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="sidebar-style-2.html">
                                        <span class="sub-item">Sidebar Style 2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="icon-menu.html">
                                        <span class="sub-item">Icon Menu</span>
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



                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar -->
//
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="text-align: center">
                <div class="card-title">Passenger Information</div>
            </div>
            <div class="card-body">
                cccc
            </div>

</div>
    </div>


</div>

    //
    <div class="main-panel">
        <div class="main-header">
            <div class="main-header-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="../index.html" class="logo">
                        <img
                                src="{{asset('backend/assets/img/kaiadmin/logo_light.svg')}}"
                                alt="navbar brand"
                                class="navbar-brand"
                                height="20"
                        />
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
            <!-- Navbar Header -->
            <nav
                    class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
            >
                <div class="container-fluid">
                    <nav
                            class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
                    >

                    </nav>

                    <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                        <li
                                class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none"
                        >
                            <a
                                    class="nav-link dropdown-toggle"
                                    data-bs-toggle="dropdown"
                                    href="#"
                                    role="button"
                                    aria-expanded="false"
                                    aria-haspopup="true"
                            >
                                <i class="fa fa-search"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-search animated fadeIn">
                                <form class="navbar-left navbar-form nav-search">
                                    <div class="input-group">
                                        <input
                                                type="text"
                                                placeholder="Search ..."
                                                class="form-control"
                                        />
                                    </div>
                                </form>
                            </ul>
                        </li>




                        <li class="nav-item topbar-user dropdown hidden-caret">
                            <a
                                    class="dropdown-toggle profile-pic"
                                    data-bs-toggle="dropdown"
                                    href="#"
                                    aria-expanded="false">
                                <div class="avatar-sm">
                                    <img
                                            src="{{asset('backend/assets/img/profile.jpg')}}"
                                            alt="..."
                                            class="avatar-img rounded-circle"/>
                                </div>
                                <span class="profile-username">
                      <span class="op-7">Hi,</span>
                      <span class="fw-bold">{{auth()->user()->name}}</span>
                    </span>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg">
                                                <img
                                                        src="{{asset('backend/assets/img/profile.jpg')}}"
                                                        alt="image profile"
                                                        class="avatar-img rounded"/>
                                            </div>
                                            <div class="u-text">
                                                <h4>{{auth()->user()->name}}</h4>
                                                <p class="text-muted">{{auth()->user()->email}}</p>
                                                <a
                                                        href="profile.html"
                                                        class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">My Profile</a>

                                        <div class="dropdown-divider"></div>

                                        <div class="dropdown-divider"></div>
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                                this.closest('form').submit();" >Logout</a>
                                        </form>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <div class="container">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Dashboard</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="#">
                                <i class="icon-home"></i>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="icon-arrow-right"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Pages</a>
                        </li>
                        <li class="separator">
                            <i class="icon-arrow-right"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Starter Page</a>
                        </li>
                    </ul>
                </div>
                <div class="page-category">Inner page content goes here</div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
                <nav class="pull-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="http://www.themekita.com">
                                ThemeKita
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Help </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Licenses </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                  Dhaka <i class="fa fa-heart heart text-danger"></i> by
                    <a href="">Oishee</a>
                </div>
                <div>
                    Distributed by
                    <a target="_blank" href="">Oishe Group</a>.
                </div>
            </div>
        </footer>
    </div>
</div>
<!--   Core JS Files   -->
<script src="{{asset('backend/assets/js/core/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('backend/assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('backend/assets/js/core/bootstrap.min.js')}}"></script>

<!-- jQuery Scrollbar -->
<script src="{{asset('backend/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>

<!-- Chart JS -->
<script src="{{asset('backend/assets/js/plugin/chart.js/chart.min.js')}}"></script>

<!-- jQuery Sparkline -->
<script src="{{asset('backend/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

<!-- Chart Circle -->
<script src="{{asset('backend/assets/js/plugin/chart-circle/circles.min.js')}}"></script>

<!-- Datatables -->
<script src="{{asset('backend/assets/js/plugin/datatables/datatables.min.js')}}"></script>

<!-- Bootstrap Notify -->
<script src="{{asset('backend/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

<!-- jQuery Vector Maps -->
<script src="{{asset('backend/assets/js/plugin/jsvectormap/jsvectormap.min.js')}}"></script>
<script src="{{asset('backend/assets/js/plugin/jsvectormap/world.js')}}"></script>`

<!-- Sweet Alert -->
<script src="{{asset('backend/assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

<!-- Kaiadmin JS -->
<script src="{{asset('backend/assets/js/kaiadmin.min.js')}}"></script>

<!-- Kaiadmin DEMO methods, don't include it in your project! -->
<script src="{{asset('backend/assets/js/setting-demo.js')}}"></script>
<script src="{{asset('backend/assets/js/demo.js')}}"></script>
<script>
    $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
    });

    $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
    });

    $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
    });
</script>
</body>
</html>






{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    {{--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">--}}
    {{--<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">--}}
    {{--<title>Bootstrap Example</title>--}}
    {{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>--}}
{{--</head>--}}
{{--<body class="p-3 m-0 border-0 bd-example m-0 border-0">--}}

{{--<!-- Example Code -->--}}
{{--<h5 style="text-align: center"><strong>Oishe Global Limited</strong></h5>--}}

{{--<div class="row">--}}
    {{--<div class="col-md-3">--}}
        {{--<div class="card" style="width: 18rem;">--}}
            {{--<svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>--}}
            {{--<div class="card-body">--}}
                {{--<h5 class="card-title">Passenger Profile</h5>--}}
                {{--<p class="card-text">Please Update Your Profile</p>--}}
            {{--</div>--}}
            {{--<ul class="list-group list-group-flush">--}}
                {{--<a href="#" class="btn btn-success">Update Personal Information</a><br>--}}
                {{--<a href="#" class="btn btn-primary">Go somewhere</a><br>--}}
                {{--<a href="#" class="btn btn-primary">Go somewhere</a><br>--}}
                {{--<form method="POST" action="{{ route('logout') }}">--}}
                    {{--@csrf--}}

                    {{--<x-dropdown-link :href="route('logout')"--}}
                                     {{--onclick="event.preventDefault();--}}
                                                {{--this.closest('form').submit();">--}}
                        {{--{{ __('Log Out') }}--}}
                    {{--</x-dropdown-link>--}}
                {{--</form>--}}



            {{--</ul>--}}

        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-9">--}}
        {{--ffffff--}}

    {{--</div>--}}

{{--</div>--}}

{{--<div class="row">--}}
    {{--<div class="col-sm-4">--}}
        {{--<div class="card" style="width: 18rem;">--}}
            {{--<img class="card-img-top" src="..." alt="Card image cap">--}}
            {{--<ul class="list-group list-group-flush">--}}
                {{--<a href="" class="btn btn-primary btn-sm btn-block">Home</a>--}}
                {{--<a href="" class="btn btn-primary btn-sm btn-block">Home</a>--}}
                {{--<a href="" class="btn btn-primary btn-sm btn-block">Home</a>--}}
                {{--<a href="" class="btn btn-primary btn-sm btn-block">Home</a>--}}

            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-sm-8">--}}
        {{--<div class="card">--}}
            {{--<h3 class="text-center">--}}
                {{--<span class="text danger">Hi.....</span><strong class="text warning">--}}
{{--{{ \Illuminate\Support\Facades\Auth::user()->name }} Update Your Proffile--}}
                {{--</strong>--}}
            {{--</h3>--}}
            {{--<div class="card-body">--}}
                {{--<form action="">--}}
                {{--<div class="form-group">--}}
            {{--<label for="exampleInputEmail">Name</label>--}}
                    {{--<input type="text" name="name" class="from control" id="exampleInputEmail" aria-describedby="emailHelp">--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<button type="submit" class="btn-danger">Submit</button>--}}

                {{--</div>--}}
                {{--</form>--}}



            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}


<!-- End Example Code -->
{{--</body>--}}
{{--</html>--}}