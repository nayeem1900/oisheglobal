<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Datatables - Kaiadmin Bootstrap 5 Admin Dashboard</title>
    <meta
            content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
            name="viewport"/>
    <link
            rel="icon"
            href="../assets/img/kaiadmin/favicon.ico"
            type="image/x-icon"/>

    <!-- Fonts and icons -->
    <script src="{{asset('backend/assets/js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
        WebFont.load({
            google: { families: ["Public Sans:300,400,500,600,700"] },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["{{asset('backend/assets/css/fonts.min.css')}}"],
            },
            active: function () {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/css/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/css/kaiadmin.min.css')}}" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/demo.css')}}" />
</head>
<body>
<div class="wrapper">
    <!-- Sidebar -->
   @include('admin.layout.sidebar')
    <!-- End Sidebar -->

    <div class="main-panel">
      @include('admin.layout.table_header')

        <div class="container">
            <div class="page-inner">
                <div class="page-header">
                    <h3 class="fw-bold mb-3">Permision DataTable</h3>
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
                <!----    Main ----->
                <div class="row">




                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Add Permission</h4>
                                    <a href="{{route('permission.create')}}" class="btn btn-primary btn-round ms-auto">


                                        <i class="fa fa-plus">Add Permission </i>

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

                                <div class="table-responsive ">
                                    <table
                                            id="add-row"
                                            class="display table table-striped table-hover table-danger ">
                                        <thead>
                                        <tr>
                                            <th>SL</th>

                                            <th>Name</th>
                                            {{--<th>Position</th>
                                            <th>Office</th>--}}
                                            <th style="width: 50%">Action</th>
                                        </tr>
                                        </thead>
                                       {{-- <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>--}}
                                        <tbody>
                                       @foreach($permissions as $item)
                                        <tr>

                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->role->name}}</td>

                                            <td>
                                                <a href="{{route('permission.edit',$item->id)}}" class="btn btn-link btn-primary btn-lg" title="Edit" data-bs-toggle="tooltip" data-original-title="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                               <div class="form-button-action">

                                                    <form action="{{route('permission.destroy',$item->id)}}" method="post">
                                                        @csrf
                                                        @method('delete')

                                                        <button class="btn btn-link btn-danger" title="delete data" data-bs-toggle="tooltip"  data-original-title="Remove">
                                                            <i class="fa fa-times"></i>
                                                        </button>





                                                    </form>

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
            </div>
        </div>

       @include('admin.layout.c_footer')
    </div>

    <!-- Custom template | don't include it in your project! -->
    @include('admin.layout.custom_temp')
    <!-- End Custom template -->
</div>
<!--   Core JS Files   -->
<script src="{{asset('backend/assets/js/core/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('backend/assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('backend/assets/js/core/bootstrap.min.js')}}"></script>

<!-- jQuery Scrollbar -->
<script src="{{asset('backend/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
<!-- Datatables -->
<script src="{{asset('backend/assets/js/plugin/datatables/datatables.min.js')}}"></script>
<!-- Kaiadmin JS -->
<script src="{{asset('backend/assets/js/kaiadmin.min.js')}}"></script>
<!-- Kaiadmin DEMO methods, don't include it in your project! -->
<script src="{{asset('backend/assets/js/setting-demo2.js')}}"></script>
<script>
    $(document).ready(function () {
        $("#basic-datatables").DataTable({});

        $("#multi-filter-select").DataTable({
            pageLength: 5,
            initComplete: function () {
                this.api()
                    .columns()
                    .every(function () {
                        var column = this;
                        var select = $(
                            '<select class="form-select"><option value=""></option></select>'
                        )
                            .appendTo($(column.footer()).empty())
                            .on("change", function () {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column
                                    .search(val ? "^" + val + "$" : "", true, false)
                                    .draw();
                            });

                        column
                            .data()
                            .unique()
                            .sort()
                            .each(function (d, j) {
                                select.append(
                                    '<option value="' + d + '">' + d + "</option>"
                                );
                            });
                    });
            },
        });

        // Add Row
        $("#add-row").DataTable({
            pageLength: 5,
        });

        var action =
            '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

        $("#addRowButton").click(function () {
            $("#add-row")
                .dataTable()
                .fnAddData([
                    $("#addName").val(),
                    $("#addPosition").val(),
                    $("#addOffice").val(),
                    action,
                ]);
            $("#addRowModal").modal("hide");
        });
    });
</script>
</body>
</html>
