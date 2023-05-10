<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('blog.index')}}" class="brand-link">
{{--        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">--}}
        <span class="brand-text font-weight-light">MY Blog</span>

    </a>

    <a href="{{route('admin.index')}}" class="brand-link">
        {{--        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">--}}
        <span class="brand-text font-weight-light">Admin panel</span>

    </a>

    <!-- Sidebar -->
    <div class="sidebar">


        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->

            <li class="nav-item mt-2">
                <a href="{{route('admin.category.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-th-list"></i>
                    <p>
                        Categories
                    </p>
                </a>
            </li>

            <li class="nav-item mt-2">
                <a href="{{route('admin.tag.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Tags
                    </p>
                </a>
            </li>


        </ul>

    </div>
    <!-- /.sidebar -->
</aside>
