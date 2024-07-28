
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
                        <a href="#">Basic Form</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">


                    <div class="card">
                        <div class="card-header">
                            @if(isset($editData))
                                <h3> Edit Passenger Info
                                    @else
                                        Add Passenger Info
                                    @endif
                                </h3>


                        </div>
                        <div class="card-body">


                            <form  enctype="multipart/form-data" method="POST" action="{{(@$editData)?route('userinfo.update',$editData->id):route('userinfo.store')}}">
                                @csrf
                                <div class="form-group row">
                                    <label for="Date" class="col-md-4 col-form-label text-md-right"> Father Name</label>
                                    <div class="col-md-4">
                                        <input type="text" name="f_name" class="form-control"id="t_date">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Date" class="col-md-4 col-form-label text-md-right"> Mother Name</label>
                                    <div class="col-md-4">
                                        <input type="text" name="m_name" class="form-control"id="t_date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Date" class="col-md-4 col-form-label text-md-right"> NID</label>
                                    <div class="col-md-4">
                                        <input type="text" name="nid" class="form-control"id="t_date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Date" class="col-md-4 col-form-label text-md-right">Passport NO</label>
                                    <div class="col-md-4">
                                        <input type="text" name="passport" class="form-control"id="passport">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Date" class="col-md-4 col-form-label text-md-right">Address</label>
                                    <div class="col-md-4">
                                        <input type="text" name="address" class="form-control"id="t_date">
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <label> Country <font style="color: red">*</font></label>
                                    <select name="country_id" class="form-control form-control-sm">
                                        <option value="">Select Country</option>
                                        @foreach($allCountry as $country)
                                            <option value="{{$country->id}}"{{(@$editData->country_id==$country->id)?"selected":""}}>{{$country->name}} </option>

                                        @endforeach

                                    </select>

                                </div>
                                {{--<div class="form-group row">
                                    <label for="Date" class="col-md-4 col-form-label text-md-right">Country Name</label>
                                    <div class="col-md-4">
                                        <input type="text" name="country_id" class="form-control"id="t_date">
                                    </div>
                                </div>--}}



                                <div class="form-group row">
                                    <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Picture') }}</label>
                                    <div class="col-md-4">
                                        <input type="file" name="image" class="form-control"id="pic">
                                    </div>
                                </div>
                                <div class="col-md-2">

                                    <img id="showImage" src="{{url('public/upload/no_img.png')}}" style="width:150px;height:160px;border:1px solid#000;">
                                </div>




                                <div class="card-action">
                                    <button class="btn btn-success">
                                        {{(@$editData)?'Update':'Submit'}}

                                    </button>

                                </div>

                            </form>
                        </div>
                    </div>

                </div>



            </div>

        </div>
    </div>




    @include('admin.layout.footer')



@endsection