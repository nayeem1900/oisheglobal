<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title> Admin Dashboard</title>
    <meta
            content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
            name="viewport"/>
    <link
            rel="icon"
            href="{{asset('backend/assets/img/kaiadmin/favicon.ico')}}"
            type="image/x-icon"/>

    <!-- Fonts and icons -->
   <script src="{{asset('backend/assets/js/plugin/webfont/webfont.min.js')}}"></script>
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
    <link rel="stylesheet" href="{{asset('backend/assets/css/demo.css')}}" />
</head>
<body>
<div class="wrapper">
    <!-- Sidebar -->
   @include('admin.layout.sidebar')
    <!-- End Sidebar -->

    <div class="main-panel">
        <div class="main-header">
            <div class="main-header-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="index.html" class="logo">
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
                    class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                <div class="container-fluid">
                    <nav
                            class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button type="submit" class="btn btn-search pe-1">
                                    <i class="fa fa-search search-icon"></i>
                                </button>
                            </div>
                            <input
                                    type="text"
                                    placeholder="Search ..."
                                    class="form-control"/>
                        </div>
                    </nav>

                    <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                        <li
                                class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                            <a
                                    class="nav-link dropdown-toggle"
                                    data-bs-toggle="dropdown"
                                    href="#"
                                    role="button"
                                    aria-expanded="false"
                                    aria-haspopup="true">
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
                                    aria-expanded="false"
                            >
                                <div class="avatar-sm">
                                    <img
                                            src="assets/img/profile.jpg"
                                            alt="..."
                                            class="avatar-img rounded-circle"
                                    />
                                </div>
                                <span class="profile-username">
                      <span class="op-7">Hi,</span>
                      <span class="fw-bold">{{ Auth::user()->name }}</span>
                    </span>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg">
                                                <img
                                                        src="assets/img/profile.jpg"
                                                        alt="image profile"
                                                        class="avatar-img rounded"
                                                />
                                            </div>
                                            <div class="u-text">
                                                <h4>{{ Auth::user()->name }}</h4>
                                                <p class="text-muted">{{ Auth::user()->email }}</p>
                                                <a
                                                        href="profile.html"
                                                        class="btn btn-xs btn-secondary btn-sm"
                                                >View Profile</a
                                                >
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">My Profile</a>

                                        <div class="dropdown-divider"></div>

                                        <div class="dropdown-divider"></div>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-dropdown-link :href="route('logout')"
                                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
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
                <div
                        class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                    <div>
                        <h3 class="fw-bold mb-3">Dashboard</h3>
                        <h6 class="op-7 mb-2"> Admin Dashboard</h6>
                    </div>
                    <div class="ms-md-auto py-2 py-md-0">
                        <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                        <a href="#" class="btn btn-primary btn-round">Add Customer</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div
                                                class="icon-big text-center icon-primary bubble-shadow-small"
                                        >
                                            <i class="fas fa-users"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Visitors</p>
                                            <h4 class="card-title">1,294</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div
                                                class="icon-big text-center icon-info bubble-shadow-small"
                                        >
                                            <i class="fas fa-user-check"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Subscribers</p>
                                            <h4 class="card-title">1303</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div
                                                class="icon-big text-center icon-success bubble-shadow-small"
                                        >
                                            <i class="fas fa-luggage-cart"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Sales</p>
                                            <h4 class="card-title">$ 1,345</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div
                                                class="icon-big text-center icon-secondary bubble-shadow-small"
                                        >
                                            <i class="far fa-check-circle"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Order</p>
                                            <h4 class="card-title">576</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-round">
                            <div class="card-header">
                                <div class="card-head-row">
                                    <div class="card-title">User Statistics</div>
                                    <div class="card-tools">
                                        <a
                                                href="#"
                                                class="btn btn-label-success btn-round btn-sm me-2">
                          <span class="btn-label">
                            <i class="fa fa-pencil"></i>
                          </span>
                                            Export
                                        </a>
                                        <a href="#" class="btn btn-label-info btn-round btn-sm">
                          <span class="btn-label">
                            <i class="fa fa-print"></i>
                          </span>
                                            Print
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                lll
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>

      @include('admin.layout.footer')
    </div>

    <!-- Custom template | don't include it in your project! -->
    <div class="custom-template">
        <div class="title">Settings</div>
        <div class="custom-content">
            <div class="switcher">
                <div class="switch-block">
                    <h4>Logo Header</h4>
                    <div class="btnSwitch">
                        <button
                                type="button"
                                class="selected changeLogoHeaderColor"
                                data-color="dark"
                        ></button>
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="blue"
                        ></button>
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="purple"
                        ></button>
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="light-blue"
                        ></button>
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="green"
                        ></button>
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="orange"
                        ></button>
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="red"
                        ></button>
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="white"
                        ></button>
                        <br />
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="dark2"
                        ></button>
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="blue2"
                        ></button>
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="purple2"
                        ></button>
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="light-blue2"
                        ></button>
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="green2"
                        ></button>
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="orange2"
                        ></button>
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="red2"
                        ></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Navbar Header</h4>
                    <div class="btnSwitch">
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="dark"
                        ></button>
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="blue"
                        ></button>
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="purple"
                        ></button>
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="light-blue"
                        ></button>
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="green"
                        ></button>
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="orange"
                        ></button>
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="red"
                        ></button>
                        <button
                                type="button"
                                class="selected changeTopBarColor"
                                data-color="white"
                        ></button>
                        <br />
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="dark2"
                        ></button>
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="blue2"
                        ></button>
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="purple2"
                        ></button>
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="light-blue2"
                        ></button>
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="green2"
                        ></button>
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="orange2"
                        ></button>
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="red2"
                        ></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Sidebar</h4>
                    <div class="btnSwitch">
                        <button
                                type="button"
                                class="changeSideBarColor"
                                data-color="white"
                        ></button>
                        <button
                                type="button"
                                class="selected changeSideBarColor"
                                data-color="dark"
                        ></button>
                        <button
                                type="button"
                                class="changeSideBarColor"
                                data-color="dark2"
                        ></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-toggle">
            <i class="icon-settings"></i>
        </div>
    </div>
    <!-- End Custom template -->
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
