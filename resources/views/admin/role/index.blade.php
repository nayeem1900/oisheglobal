
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
                        <a href="#">Forms</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Basic Role</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">



                    <table id="example1" class="table table-bordered table-hover">

                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Role Name</th>

                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{($item->name)}}</td>

                                <td>
                                    <a href="{{route('role.edit',$item->id)}}" class="btn btn-sm btn-primary"><i class ="fa fa-pencil"></i> </a>

                                    <form action="{{route('role.destroy',$item->id)}}" method="post">
                                       @csrf
                                       @method('delete')
                                    <button class="btn btn-sm btn-danger" title="delete data"><i class ="fa fa-trash"></i> </button>
                                   </form>



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