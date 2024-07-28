


@extends('admin.layout.master')
@section('content')
    <div class="main-panel">
    @include('admin.layout.header')
    <!-- End Navbar -->
    </div>


    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Role</h3>
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
                        <a href="#">Role</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">BasicRole</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">



                    <div class="card">
                        <div class="card-header">

                            Edit Role

                            </h3>


                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <form  method="post" action="{{route('role.update',$role->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <label for="role name">Role Name</label>
                                            <input type="text" name="name" value="{{ $role->name }}" class="form-control"id="name" placeholder="Enter Role Name">
                                        </div>

                                        <div class="card-action">
                                            <button class="btn btn-success">Update</button>

                                        </div>

                                    </form>




                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.layout.footer')



@endsection