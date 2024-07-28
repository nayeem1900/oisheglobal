<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Datatables - Kaiadmin Bootstrap 5 Admin Dashboard</title>
    <meta
            content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
            name="viewport"
    />
    <link
            rel="icon"
            href="../assets/img/kaiadmin/favicon.ico"
            type="image/x-icon"
    />

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
                    <h3 class="fw-bold mb-3">DataTables.Net</h3>
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
                <div class="row">


                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Permission</h4>
                                    <button
                                            class="btn btn-primary btn-round ms-auto"
                                            data-bs-toggle="modal"
                                            data-bs-target="#addRowModal">
                                        <i class="fa fa-plus"></i>
                                        Add Permission
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Modal -->
                                <form action="{{route('permission.store')}}" method="post">
                                    @csrf
                            <div class="row">
                              <div class="col-md-3">
                                {{--<div class="form-group">--}}
                                    <label for="role">Select Role</label>
                                   <select class="form-control"  name="role_id" id ="role">
                                    <option value="">Select Role</option>
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}} </option>
                                      @endforeach
                                   </select>
                                    <br>
                                {{--</div>--}}
                                  {{--<div class="form-group">--}}
                                      <button class="btn btn-primary" type="submit">Create</button>
                                  </div>
                              <div class="col-md-9">



                                      <table
                                              id="add-row"
                                              class="display table table-bordered table-hover table-danger">
                                          <thead>
                                          <tr>
                                              <th>Permission</th>
                                              <th>Add</th>
                                              <th>View</th>
                                              <th>Edit</th>
                                              <th>Delete</th>
                                              <th>List</th>

                                          </tr>
                                          </thead>

                                          <tbody>

                                              <tr>
                                            <td>Setting</td>
                                              <td>
                                                 <input type="checkbox" name="permission[setteing][add]" value="1">
                                                 </td>

                                                  <td>
                                                      <input type="checkbox" name="permission[setteing][view]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[setteing][edit]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[setteing][delete]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[setteing][list]" value="1">
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>Create User</td>
                                                  <td>
                                                      <input type="checkbox" name="permission[createuser][add]" value="1">
                                                  </td>

                                                  <td>
                                                      <input type="checkbox" name="permission[createuser][view]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[createuser][edit]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[createuser][delete]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[createuser][list]" value="1">
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>Role Management</td>
                                                  <td>
                                                      <input type="checkbox" name="permission[rolemanagement][add]" value="1">
                                                  </td>

                                                  <td>
                                                      <input type="checkbox" name="permission[rolemanagement][view]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[rolemanagement][edit]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[rolemanagement][delete]" value="1">
                                                  </td>
                                                  <td>
                                                      <input type="checkbox" name="permission[rolemanagement][list]" value="1">
                                                  </td>
                                              </tr>



                                          </tbody>
                                      </table>



                              </div>

                            </div>


                </form>
        </div>

        <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
                <nav class="pull-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="http://www.themekita.com">
                                ThemeKita
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Help </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Licenses </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    2024, made with <i class="fa fa-heart heart text-danger"></i> by
                    <a href="http://www.themekita.com">ThemeKita</a>
                </div>
                <div>
                    Distributed by
                    <a target="_blank" href="https://themewagon.com/">ThemeWagon</a>.
                </div>
            </div>
        </footer>
    </div>

    <!-- Custom template | don't include it in your project! -->
    <div class="custom-template">
        <div class="title">Settings</div>
        <div class="custom-content">
            <div class="switcher">
                <div class="switch-block">
                    <h4>Logo Header</h4>
                    <div class="btnSwitch">
                        <button
                                type="button"
                                class="selected changeLogoHeaderColor"
                                data-color="dark"
                        ></button>
                        <button
                                type="button"
                                class="selected changeLogoHeaderColor"
                                data-color="blue"
                        ></button>
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="purple"
                        ></button>
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="light-blue"
                        ></button>
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="green"
                        ></button>
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="orange"
                        ></button>
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="red"
                        ></button>
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="white"
                        ></button>
                        <br />
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="dark2"
                        ></button>
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="blue2"
                        ></button>
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="purple2"
                        ></button>
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="light-blue2"
                        ></button>
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="green2"
                        ></button>
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="orange2"
                        ></button>
                        <button
                                type="button"
                                class="changeLogoHeaderColor"
                                data-color="red2"
                        ></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Navbar Header</h4>
                    <div class="btnSwitch">
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="dark"
                        ></button>
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="blue"
                        ></button>
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="purple"
                        ></button>
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="light-blue"
                        ></button>
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="green"
                        ></button>
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="orange"
                        ></button>
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="red"
                        ></button>
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="white"
                        ></button>
                        <br />
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="dark2"
                        ></button>
                        <button
                                type="button"
                                class="selected changeTopBarColor"
                                data-color="blue2"
                        ></button>
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="purple2"
                        ></button>
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="light-blue2"
                        ></button>
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="green2"
                        ></button>
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="orange2"
                        ></button>
                        <button
                                type="button"
                                class="changeTopBarColor"
                                data-color="red2"
                        ></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Sidebar</h4>
                    <div class="btnSwitch">
                        <button
                                type="button"
                                class="selected changeSideBarColor"
                                data-color="white"></button>
                        <button
                                type="button"
                                class="changeSideBarColor"
                                data-color="dark"></button>
                        <button
                                type="button"
                                class="changeSideBarColor"
                                data-color="dark2"></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-toggle">
            <i class="icon-settings"></i>
        </div>
    </div>
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
