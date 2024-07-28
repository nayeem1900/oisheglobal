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
                            <div class="card-header" style="text-align: center">
                                <div class="card-title">Update User</div>
                            </div>
                            <div class="card-body">
                                <form action="{{route('subadmin.update',$users->id)}}" method="post">
                                    @csrf
                                    @method('put')

                                    <div class="row">
                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group">
                                                <label for="email">Email Address</label>
                                                <input
                                                        type="email" name="email" value="{{$users->email}}"
                                                        class="form-control"
                                                        id="email"
                                                        placeholder="Enter Email"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input
                                                        type="text" name="name" value="{{$users->name}}"
                                                        class="form-control"
                                                        id="name"
                                                        placeholder="Enter Name"/>

                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group">
                                                <label for="mobile">Mobile No</label>
                                                <input
                                                        type="text" name="phone" value="{{$users->phone}}"
                                                        class="form-control"
                                                        id="phone"
                                                        placeholder="Mobile"/>

                                            </div>
                                        </div>



                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Select User</label>
                                                <select
                                                        class="form-select" name="role_id"
                                                        id="exampleFormControlSelect1">
                                                    <option>Select User</option>
                                                    @foreach($roles as $role)
                                                        <option value="{{$role->id}}" {{$users->role_id == $role->id ? 'selected':''}}>{{$role->name}}</option>
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
                                                        <option value="{{$branch->id}} {{$users->branch_id == $branch->id ? 'selected':''}}">{{$branch->name}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>




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
                                        <button class="btn btn-success">Update</button>

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