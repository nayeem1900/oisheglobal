
@extends('admin.layout.master')
@section('content')
    <div class="main-panel">
    @include('admin.layout.header')
    <!-- End Navbar -->
    </div>


    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Forms</h3>
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
                        <a href="#">Forms</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Passenger Form</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">



<table id="example1" class="table table-bordered table-hover">

    <thead>
    <tr>
        <th>SL</th>
        <th>Fname Name</th>

        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($allUser as $key=>$value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{($value->name)}}</td>

            <td>
                <a title="Edit" class="btn btn-sm btn-primary" href="{{route('userinfo.edit',$value->id)}}"><i class="fa fa-edit"></i></a>


            </td>

        </tr>
    @endforeach


    </tbody>



</table>

                </div>
            </div>
        </div>

    </div>




    @include('admin.layout.footer')



@endsection