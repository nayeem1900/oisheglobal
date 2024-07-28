@extends('admin.layout.c_master')
@section('admin-content')

    <div class="main-panel">
        @include('admin.layout.table_header')

        <div class="container">
            <div class="page-inner">
                <div class="page-header">
                    <h3 class="fw-bold mb-3">Passenger DataTable</h3>
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
                                <div class="card-title">Passenger Information</div>
                            </div>
                            <div class="card-body">
                                <form action="{{route('userinfo.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">

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

                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group">
                                                <label for="Father Name">Father Name</label>
                                                <input
                                                        type="text" name="f_name"
                                                        class="form-control"
                                                        id="f_name"
                                                        placeholder="Father Name"/>

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group">
                                                <label for="Father Name">Mother Name</label>
                                                <input
                                                        type="text" name="m_name"
                                                        class="form-control"
                                                        id="f_name"
                                                        placeholder="Mother Name"/>

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group">
                                                <label for="mobile">Email</label>
                                                <input
                                                        type="email" name="email"
                                                        class="form-control"
                                                        id="m_name"
                                                        placeholder="Email"/>

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group">
                                                <label for="mobile">NID NO</label>
                                                <input
                                                        type="text" name="nid"
                                                        class="form-control"
                                                        id="nid"
                                                        placeholder="NID"/>

                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Passport Image</label>
                                                <input
                                                        type="file" name="passport"
                                                        class="form-control-file"
                                                        id="exampleFormControlFile1"/>

                                            </div>

                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group">
                                                <label for="mobile">Address</label>
                                                <input
                                                        type="text" name="address"
                                                        class="form-control"
                                                        id="address"
                                                        placeholder="Address"/>

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

                                        {{--<div class="col-md-6 col-lg-4">--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label for="exampleFormControlSelect1">Select User</label>--}}
                                                {{--<select--}}
                                                        {{--class="form-select" name="role_id"--}}
                                                        {{--id="exampleFormControlSelect1">--}}
                                                    {{--<option>Select User</option>--}}
                                                    {{--@foreach($roles as $role)--}}
                                                        {{--<option value="{{$role->id}}">{{$role->name}}</option>--}}
                                                    {{--@endforeach--}}

                                                {{--</select>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Select Country</label>
                                                <select
                                                        class="form-select" name="country_id"
                                                        id="exampleFormControlSelect1">
                                                    <option>Select Country</option>
                                                    @foreach($allCountry as $country)
                                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                        <label for="exampleFormControlFile1">Image</label>
                                        <input
                                        type="file"
                                        class="form-control-file"
                                        id="exampleFormControlFile1"/>

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