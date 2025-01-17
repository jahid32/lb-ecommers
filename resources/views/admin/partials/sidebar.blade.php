<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('storage/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">{{config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">

                <img src="{{ url('storage/user2-160x160.jpg') }}" alt="Alexander Pierce" title="Alexander Pierce" />

            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview {{ Request::is(' admin/*')  ? 'active menu-open': '' }}">
                    <a href="{{route('admin.dashboard')}}" class="nav-link {{ Request::is(' admin/dashboard')  ? 'active ': '' }}">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                           Dashboard
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item " >
                            <a href="{{route('admin.users.index')}}" class="nav-link {{ Request::is(' admin/users-list')  ? 'active ': '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>List users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.users.create')}}" class="nav-link {{ Request::is(' admin/add-user')  ? 'active ': '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add User</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
