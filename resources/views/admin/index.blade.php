@extends('layouts.admin')
@section('title', 'List of All user')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h1 class="card-title">List Of all users</h1>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="UserList" class="table table-bordered table-striped dataTable"
                                                   role="grid" aria-describedby="example1_info">
                                                <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="Rendering engine: activate to sort column descending"
                                                        style="width: 170px;">User Id
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Browser: activate to sort column ascending"
                                                        style="width: 219px;">Full Name
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Platform(s): activate to sort column ascending"
                                                        style="width: 194px;"> User Name
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Engine version: activate to sort column ascending"
                                                        style="width: 143px;">Phone
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="CSS grade: activate to sort column ascending"
                                                        style="width: 101px;">Email
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($users as $key=>$user)

                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{$user->id}}</td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->username}}</td>
                                                    <td>{{$user->phone}}</td>
                                                    <td>{{$user->email}}</td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th rowspan="1" colspan="1">User Id</th>
                                                    <th rowspan="1" colspan="1">Full Name</th>
                                                    <th rowspan="1" colspan="1"> User Name</th>
                                                    <th rowspan="1" colspan="1">Phone</th>
                                                    <th rowspan="1" colspan="1">Email</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div>
                    <div class="container-fluid">
                        <div class="row docs-premium-template">
                            <div class="col-sm-12 col-md-6">
                                <div class="card">
                                    <div class="card-body p-2">
                                        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
                                            PREMIUM TEMPLATE
                                        </h4>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="https://themequarry.com/theme/webadmin-responsive-admin-dashboard-template-ASFEDAA8"
                                                   class="ad-click-event">
                                                    <img
                                                        src="https://themequarry.com/storage/images/approved/ASFEDAA8_v1.2.0_595b0b787d2e5.png"
                                                        alt="Webadmin" class="media-object"
                                                        style="width: 150px;height: auto;border-radius: 4px;box-shadow: 0 1px 3px rgba(0,0,0,.15);">
                                                </a>
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="clearfix">
                                                    <p class="pull-right">
                                                        <a href="https://themequarry.com/theme/webadmin-responsive-admin-dashboard-template-ASFEDAA8"
                                                           class="btn btn-success btn-sm ad-click-event">
                                                            LEARN MORE
                                                        </a>
                                                    </p>

                                                    <h4 style="margin-top: 0">Webadmin ─ $18</h4>

                                                    <p class="mb-1">Responsive Admin Dashboard</p>
                                                    <p style="margin-bottom: 0">
                                                        <i class="fa fa-shopping-cart margin-r5"></i> 32+ purchases
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="card">
                                    <div class="card-body p-2">
                                        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
                                            PREMIUM TEMPLATE
                                        </h4>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="https://www.creative-tim.com/product/material-dashboard-pro-angular2?affiliate_id=97705"
                                                   class="ad-click-event">
                                                    <img
                                                        src="/uploads/images/free_templates/creative-tim-material-angular.png"
                                                        alt="Material Dashboard Pro" class="media-object"
                                                        style="width: 150px;height: auto;border-radius: 4px;box-shadow: 0 1px 3px rgba(0,0,0,.15);">
                                                </a>
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="clearfix">
                                                    <p class="pull-right">
                                                        <a href="https://www.creative-tim.com/product/material-dashboard-pro-angular2?affiliate_id=97705"
                                                           class="btn btn-success btn-sm ad-click-event">
                                                            LEARN MORE
                                                        </a>
                                                    </p>

                                                    <h4 style="margin-top: 0">Material Dashboard Pro ─ $59</h4>

                                                    <p class="mb-1">Angular 2 Premium Material Bootstrap Admin with a
                                                        fresh, new design inspired by Google's Material Design</p>
                                                    <p style="margin-bottom: 0">
                                                        <i class="fa fa-shopping-cart margin-r5"></i> 853+ purchases
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
