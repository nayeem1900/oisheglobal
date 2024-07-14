
{{--
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>


</x-app-layout>
--}}

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

              {{--      <div class="card">
                        <div class="card-header">

                            @if(isset($editData))
                                <h3> Edit Group
                                    @else
                                        Add Group
                                    @endif

                                    <a class="btn btn-success float-right btn-sm" href=""><i class="fa fa-list"></i>Group List</a>
                                </h3>


                        </div><!-- /.card-header -->
                        <div class="card-body" >



                            <form method="POST" action="" >


                                <div class="form-group row">
                                    <label>Group Name</label>
                                    <div class="col-md-4">
                                        <input type="text" name="name" value="" class="form-control"id="name">
                                        <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                                    </div>
                                </div>


                                <div class="form-group row mb-0">
                                    <div class="col-md-4 offset-md-4">
                                        <button type="submit" class="btn btn-primary">

                                            {{(@$editData)?'Update':'Submit'}}

                                        </button>

                                    </div>
                                </div>
                            </form>



                        </div><!-- /.card-body -->
                    </div>--}}


                   <div class="card">
                        <div class="card-header">
                            @if(isset($editData))
                                <h3> Edit Branch
                                    @else
                                        Add Branch
                            @endif
                                </h3>


                        </div>
                        <div class="card-body">
                            <div class="row">
                            <div class="col-md-4">
                               <form method="POST" action="{{(@$editData)?route('branch.update',$editData->id):route('branch.store')}}">
                                   @csrf
                                <div class="form-group">
                                    <label for="branchName">Branch Name</label>
                                    <input type="text" name="name" value="{{@$editData->name}}" class="form-control"id="name" placeholder="Enter Branch">
                                </div>

                                <div class="card-action">
                                    <button class="btn btn-success">Submit</button>

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