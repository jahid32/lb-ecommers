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
                                                    <th>User Id</th>
                                                    <th>Full Name</th>
                                                    <th> User Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Action</th>
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
                                                        <td>
                                                            <a href="{{route('admin.users.edit',$user->id)}}"
                                                               class='btn btn-info'>Edit</a>
                                                            <button class="btn btn-danger" type="button"
                                                                    onclick="deleteItem({{ $user->id }})">
                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                            </button>
                                                            <form id="delete-form-{{ $user->id }}"
                                                                  action="{{route('admin.users.destroy',$user->id)}}"
                                                                  method="post"
                                                                  style="display:none;">

                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                        </td>

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
                                                    <th rowspan="1" colspan="1">Action</th>
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

            </section>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

@endsection
@push('scripts')

    <script type="text/javascript">
        window.addEventListener('load', function () {
            $('#UserList').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });

        function deleteItem(id) {
            const swalWithBootstrapButtons = swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
            });

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this! !!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-' + id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
@endpush
