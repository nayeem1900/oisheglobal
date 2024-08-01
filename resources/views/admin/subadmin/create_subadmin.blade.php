@extends('admin.layout.c_master')
@section('admin-content')

    <div class="main-panel">
        @include('admin.layout.table_header')

        <div class="container">
            <div class="page-inner">
                <div class="page-header">
                    <h3 class="fw-bold mb-3">Branch DataTable</h3>
                    <ul class="breadcrumbs mb-3">
                        <li class="nav-home">
                            <a href="#">
                                <i class="icon-home"></i>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="icon-arrow-right"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Tables</a>
                        </li>
                        <li class="separator">
                            <i class="icon-arrow-right"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Datatables</a>
                        </li>
                    </ul>
                </div>
                <!--- Main Content Start Nayeem --->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" style="text-align: center">
                                <div class="card-title">Create Branch User</div>
                            </div>
                            <div class="card-body">
                                <form action="{{route('subadmin.store')}}" method="post">
                                    @csrf

                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input
                                                    type="email" name="email"
                                                    class="form-control"
                                                    id="email"
                                                    placeholder="Enter Email"/>
                                        </div>
                                        </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input
                                                    type="text" name="name"
                                                    class="form-control"
                                                    id="name"
                                                    placeholder="Enter Name"/>

                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="mobile">Mobile No</label>
                                            <input
                                                    type="text" name="phone"
                                                    class="form-control"
                                                    id="phone"
                                                    placeholder="Mobile"/>

                                        </div>
                                    </div>




                                        {{--<div class="form-group">--}}
                                            {{--<label>Gender</label><br />--}}
                                            {{--<div class="d-flex">--}}
                                                {{--<div class="form-check">--}}
                                                    {{--<input--}}
                                                            {{--class="form-check-input"--}}
                                                            {{--type="radio"--}}
                                                            {{--name="flexRadioDefault"--}}
                                                            {{--id="flexRadioDefault1"--}}
                                                    {{--/>--}}
                                                    {{--<label--}}
                                                            {{--class="form-check-label"--}}
                                                            {{--for="flexRadioDefault1"--}}
                                                    {{-->--}}
                                                        {{--Male--}}
                                                    {{--</label>--}}
                                                {{--</div>--}}
                                                {{--<div class="form-check">--}}
                                                    {{--<input--}}
                                                            {{--class="form-check-input"--}}
                                                            {{--type="radio"--}}
                                                            {{--name="flexRadioDefault"--}}
                                                            {{--id="flexRadioDefault2"--}}
                                                            {{--checked--}}
                                                    {{--/>--}}
                                                    {{--<label--}}
                                                            {{--class="form-check-label"--}}
                                                            {{--for="flexRadioDefault2"--}}
                                                    {{-->--}}
                                                        {{--Female--}}
                                                    {{--</label>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                        <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Select User</label>
                                            <select
                                                    class="form-select" name="role_id"
                                                    id="exampleFormControlSelect1">
                                                <option>Select User</option>
                                                @foreach($roles as $role)
                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Select Branch</label>
                                            <select
                                                    class="form-select" name="branch_id"
                                                    id="exampleFormControlSelect1">
                                                <option>Select Branch</option>
                                                @foreach($branches as $branch)
                                                    <option value="{{$branch->id}}">{{$branch->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                        {{--<div class="col-md-6 col-lg-4">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label for="exampleFormControlFile1"--}}
                                            {{-->Example file input</label>--}}
                                            {{--<input--}}
                                                    {{--type="file"--}}
                                                    {{--class="form-control-file"--}}
                                                    {{--id="exampleFormControlFile1"/>--}}

                                        {{--</div>--}}

                                {{--</div>--}}




                                    <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input
                                                type="text"   name="password"
                                                class="form-control"
                                                id="password"
                                                placeholder="Password"/>
                                    </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="password"> Confirm Password</label>
                                            <input
                                                    type="text" name="password_confirmation"
                                                    class="form-control"
                                                    id="password"
                                                    placeholder="Password"/>
                                        </div>
                                    </div>


                            </div>
                            <div class="card-action">
                                <button class="btn btn-success">Submit</button>

                            </div>
                                </form>
                        </div>
                    </div>
                </div>
                </div>
                <!-- End Main  --->
            </div>
        </div>

        @include('admin.layout.c_footer')
    </div>


@endsection