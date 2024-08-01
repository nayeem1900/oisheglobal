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
                                <div class="card-title">Create Baner</div>
                            </div>
                            <div class="card-body">
                                <form action="{{route('baner.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">


                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Baner Image</label>
                                                <input
                                                        type="file" name="img"
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