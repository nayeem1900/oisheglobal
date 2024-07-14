
@extends('admin.layout.master')
@section('content')
    <div class="main-panel">
    @include('admin.layout.header')
    <!-- End Navbar -->
    </div>


    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Country</h3>
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
                        <a href="#">Country</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Country</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">


                   <div class="card">
                        <div class="card-header">
                            @if(isset($editData))
                                <h3> Edit Country
                                    @else
                                        Add Country
                            @endif
                                </h3>


                        </div>
                        <div class="card-body">
                            <div class="row">
                            <div class="col-md-4">
                               <form method="POST" action="{{(@$editData)?route('country.update',$editData->id):route('country.store')}}">
                                   @csrf
                                <div class="form-group">
                                    <label for="branchName">Country Name</label>
                                    <input type="text" name="name" value="{{@$editData->name}}" class="form-control"id="name" placeholder="Enter Country">
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
        </div>
    </div>

    @include('admin.layout.footer')



@endsection