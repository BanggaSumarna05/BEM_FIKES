<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon ">
                  <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" width="40"  class="me-2">

                </div>
                <div class="sidebar-brand-text mx-3">BEM-FIKES</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Main Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMain"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-building"></i>
                    <span>Main</span>
                </a>
                <div id="collapseMain" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Main:</h6>
                        <a class="collapse-item {{ request()->is('superadmin/Profile') ? 'active' : '' }}"
                            href="{{ url('/superadmin/Profile') }}">organizational Profile</a>
                        <a class="collapse-item {{ request()->is('superadmin/SO') ? 'active' : '' }}"
                            href="{{ url('/superadmin/SO') }}">organizational structure</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-layer-group"></i>
                    <span>Category</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Category:</h6>
                        <a class="collapse-item {{ request()->is('superadmin/categoryArticle') ? 'active' : '' }}"
                            href="{{ url('/superadmin/categoryArticle') }}">Articles</a>
                        <a class="collapse-item {{ request()->is('superadmin/categoryGalery') ? 'active' : '' }}"
                            href="{{ url('/superadmin/categoryGalery') }}">Galery</a>
                        <a class="collapse-item {{ request()->is('superadmin/categoryAspiration') ? 'active' : '' }}"
                            href="{{ url('/superadmin/categoryAspiration') }}">Aspiration</a>
                        <a class="collapse-item {{ request()->is('superadmin/categoryFile') ? 'active' : '' }}"
                            href="{{ url('/superadmin/categoryFile') }}">File</a>
                    </div>
                </div>
            </li>

            <li class="nav-item @active('superadmin/Article')">
                <a class="nav-link" href="{{ url('/superadmin/Article') }}">
                    <i class="fas fa-fw fa-newspaper"></i>
                    <span>Article</span>
                </a>


                <li class="nav-item @active('superadmin/proker')">
                {{-- <li class="nav-item {{ request()->is('superadmin/Proker*') ? 'active' : '' }}"> --}}
    <a class="nav-link" href="{{ url('/superadmin/proker') }}">
        <i class="fas fa-fw fa-tasks"></i>
        <span>Program Kerja</span>
    </a>
</li>

            </li>
            <li class="nav-item @active('superadmin/Galery')">
                <a class="nav-link" href="{{ url('/superadmin/Galery') }}">
                    <i class="fas fa-fw fa-camera"></i>
                    <span>Galery</span></a>
            </li>
            <li class="nav-item @active('superadmin/Aspiration')">
                <a class="nav-link" href="{{ url('/superadmin/Aspiration') }}">
                    <i class="fas fa-fw fa-exclamation-triangle"></i>
                    <span>Aspirasi</span></a>
            </li>

            <li class="nav-item @active('superadmin/File')">
                <a class="nav-link" href="{{ url('/superadmin/File') }}">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Files</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <li class="nav-item @active('superadmin/Users')">
                <a class="nav-link" href="{{ url('/superadmin/Users') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Users</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                finally
            </div>
            <!-- Tambahkan tautan "Logout" di luar div dengan class "collapse" -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" data-toggle="modal" data-target="#customLogoutModal">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            {{-- <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components,
                    and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to
                    Pro!</a>
            </div> --}}
            <li class="nav-item">
                {{-- <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                        Logout
                    </p>
                </a> --}}
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <div class="modal fade" id="customLogoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    </div>
                </div>
            </div>
        </div>
</body>
