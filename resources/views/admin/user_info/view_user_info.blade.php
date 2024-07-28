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
                                    <a href="" class="btn btn-primary btn-round ms-auto">

                                        <i class="fa fa-plus">Create User </i>
                                    </a>





                                </div>
                            </div>
                            <div class="card-body">


                                <div class="table-responsive">
                                    <table
                                            id="add-row"
                                            class="display table table-striped table-hover table-danger ">
                                        <thead>
                                        <tr>
                                            <th>SL</th>

                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th style="width: 30%">Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($allUser as $item)
                                            <tr>

                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>{{$item->phone}}</td>
                                                {{--{<td>{{$item->user->name}}</td>--}}

                                                <td>
                                                    <a href="{{route('userinfo.edit',$item->id)}}" class="btn btn-link btn-primary btn-lg" title="Edit" data-bs-toggle="tooltip" data-original-title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <div class="form-button-action">

                                                        {{--<form action="{{route('subadmin.destroy',$item->id)}}" method="post">--}}
                                                            {{--@csrf--}}
                                                            {{--@method('delete')--}}

                                                            {{--<button class="btn btn-link btn-danger" title="delete data" data-bs-toggle="tooltip"  data-original-title="Remove">--}}
                                                                {{--<i class="fa fa-times"></i>--}}
                                                            {{--</button>--}}





                                                        {{--</form>--}}

                                                    </div>
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