@extends('admin.layout.c_master')
@section('admin-content')

    <div class="main-panel">
        @include('admin.layout.table_header')

        <div class="container">
            <div class="page-inner">
                <div class="page-header">
                    <h3 class="fw-bold mb-3">User DataTable</h3>
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
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">User Management</h4>
                                    <a href="{{route('ubaner.add')}}" class="btn btn-primary btn-round ms-auto">

                                        <i class="fa fa-plus">Create Baner </i>
                                    </a>





                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Modal -->
                                {{--<div class="modal fade"--}}
                                     {{--id="addRowModal"--}}
                                     {{--tabindex="-1"--}}
                                     {{--role="dialog"--}}
                                     {{--aria-hidden="true">--}}
                                    {{--<div class="modal-dialog" role="document">--}}
                                        {{--<div class="modal-content">--}}
                                            {{--<div class="modal-header border-0">--}}
                                                {{--<h5 class="modal-title">--}}
                                                    {{--<span class="fw-mediumbold"> New</span>--}}
                                                    {{--<span class="fw-light"> Row </span>--}}
                                                {{--</h5>--}}
                                                {{--<button--}}
                                                        {{--type="button"--}}
                                                        {{--class="close"--}}
                                                        {{--data-dismiss="modal"--}}
                                                        {{--aria-label="Close"--}}
                                                {{-->--}}
                                                    {{--<span aria-hidden="true">&times;</span>--}}
                                                {{--</button>--}}
                                            {{--</div>--}}
                                            {{--<div class="modal-body">--}}
                                                {{--<p class="small">--}}
                                                    {{--Create a new row using this form, make sure you--}}
                                                    {{--fill them all--}}
                                                {{--</p>--}}
                                                {{--<form>--}}
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-sm-12">--}}
                                                            {{--<div class="form-group form-group-default">--}}
                                                                {{--<label>Name</label>--}}
                                                                {{--<input--}}
                                                                        {{--id="addName"--}}
                                                                        {{--type="text"--}}
                                                                        {{--class="form-control"--}}
                                                                        {{--placeholder="fill name"/>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-6 pe-0">--}}
                                                            {{--<div class="form-group form-group-default">--}}
                                                                {{--<label>Position</label>--}}
                                                                {{--<input--}}
                                                                        {{--id="addPosition"--}}
                                                                        {{--type="text"--}}
                                                                        {{--class="form-control"--}}
                                                                        {{--placeholder="fill position"/>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-6">--}}
                                                            {{--<div class="form-group form-group-default">--}}
                                                                {{--<label>Office</label>--}}
                                                                {{--<input--}}
                                                                        {{--id="addOffice"--}}
                                                                        {{--type="text"--}}
                                                                        {{--class="form-control"--}}
                                                                        {{--placeholder="fill office"--}}
                                                                {{--/>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</form>--}}
                                            {{--</div>--}}
                                            {{--<div class="modal-footer border-0">--}}
                                                {{--<button--}}
                                                        {{--type="button"--}}
                                                        {{--id="addRowButton"--}}
                                                        {{--class="btn btn-primary">--}}
                                                    {{--Add--}}
                                                {{--</button>--}}
                                                {{--<button--}}
                                                        {{--type="button"--}}
                                                        {{--class="btn btn-danger"--}}
                                                        {{--data-dismiss="modal">--}}
                                                    {{--Close--}}
                                                {{--</button>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                <table id="example1" class="table table-bordered table-hover">

                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>User Name</th>
                                        <th>User Type</th>
                                        <th>User Baner</th>

                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allData as $key=>$value)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{($value->name)}}</td>



                                            <td>
                                                <a title="Edit" class="btn btn-sm btn-primary" href="{{route('ubaner.edit',$value->id)}}"><i class="fa fa-edit"></i></a>


                                            </td>

                                        </tr>
                                    @endforeach


                                    </tbody>



                                </table>

                            </div>
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