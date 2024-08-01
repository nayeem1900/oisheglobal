@extends('admin.layout.c_master')
@section('admin-content')

    <div class="main-panel">
        @include('admin.layout.table_header')

        {{--<div class="container">--}}
            {{--<div class="page-inner">--}}
                {{--<div class="page-header">--}}
                    {{--<h3 class="fw-bold mb-3">Welcome Oishe Group</h3>--}}
                    {{--<ul class="breadcrumbs mb-3">--}}
                        {{--<li class="nav-home">--}}
                            {{--<a href="#">--}}
                                {{--<i class="icon-home"></i>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="separator">--}}
                            {{--<i class="icon-arrow-right"></i>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#">Tables</a>--}}
                        {{--</li>--}}
                        {{--<li class="separator">--}}
                            {{--<i class="icon-arrow-right"></i>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#">Datatables</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--<!--- Main Content Start Nayeem --->--}}

            {{--</div>--}}
        {{--</div>--}}


        <div class="container">
            <div class="page-inner">
                <!-- Card -->
                <h3 class="fw-bold mb-3">Welcome Oishe Group</h3>

                <!-- Card With Icon States Color -->

                <!-- Card With Icon States Background -->
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="card ">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div
                                                class="icon-big text-center icon-primary bubble-shadow-small"><i class="fas fa-users"></i>
                                        </div>
                                    </div>
                                    <p> Madaripur</p>
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
                                            <p class="card-category">Code</p>
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
                                            <p class="card-category">Number of Passenger</p>
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
                <!-- Row Card No Padding -->


                {{--<div class="row">--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="card card-secondary">--}}
                            {{--<div class="card-body skew-shadow">--}}
                                {{--<h1>3,072</h1>--}}
                                {{--<h5 class="op-8">Total conversations</h5>--}}
                                {{--<div class="pull-right">--}}
                                    {{--<h3 class="fw-bold op-8">88%</h3>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}

                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-body ">
                                <img
                                        src="{{asset('upload/pic/download.jfif')}}" style="width: 900px" height="300px"
                                        alt="Visa Logo"/>

                            </div>
                        </div>
                    </div>


                </div>
//


                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary bg-primary-gradient">
                            <div class="card-body pb-0">
                                <p style="color: greenyellow">Address</p>
                                <p>
                                    jfjjjdkjdk9eo9eei111111111111111111111111111111
                                    kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk
                                    kkkkkkkkkkkkkkkkkkkkkkkkkk
                                </p>
                            </div>
                        </div>
                    </div>
                    {{--<div class="col-md-4">--}}
                        {{--<div class="card card-black">--}}
                            {{--<div class="card-body pb-0">--}}
                                {{--<div class="h1 fw-bold float-end">-3%</div>--}}
                                {{--<h2 class="mb-2">27</h2>--}}
                                {{--<p>New User</p>--}}
                                {{--<div class="pull-in sparkline-fix chart-as-background">--}}
                                    {{--<div id="lineChart5"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="col-md-6">
                        <div class="card card-success bg-success2">
                            <div class="card-body pb-0">


                                <p>Contact No</p>
                                <div class="pull-in sparkline-fix chart-as-background">
                                    <div id="lineChart6"></div>
                                </div>
                                <p>01845552223333</p>
                            </div>
                        </div>
                    </div>
                </div>









                <!-- TimeLine -->


                <!-- Pricing -->




                <!-- Customized Card -->
                <h3 class="fw-bold mb-3">Customized Card</h3>
                <div class="row">


                    <div class="col-md-4">
                        <div class="card card-profile">
                            <div
                                    class="card-header"
                                    style="background-image: url({{asset('backend/assets/img/blogpost.jpg')}})"
                            >
                                <div class="profile-picture">
                                    <div class="avatar avatar-xl">
                                        <img
                                                src="{{asset('upload/pic/sjarukh.jfif')}}"
                                                alt="..."
                                                class="avatar-img rounded-circle"/>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="user-profile text-center">
                                    <div class="name">Sharukh Khan</div>




                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>




        @include('admin.layout.c_footer')
    </div>


@endsection