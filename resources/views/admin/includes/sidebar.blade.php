<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <li class="nav-item">
        <form method="POST" action="{{route('logout')}}">
            @csrf
            <input type="submit" value="EXIT" class="btn btn-outline-danger ml-3">
        </form>
    </li>

    <!-- Sidebar -->
    <div class="sidebar">


        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->


            <li class="nav-item mt-2">
                <a href="{{route('blog.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-blog"></i>
                    <p>
                        Blog
                    </p>
                </a>
            </li>

            <li class="nav-item mt-2">
                <a href="{{route('admin.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Admin panel
                    </p>
                </a>
            </li>

            <li class="nav-item mt-2">
                <a href="{{route('admin.user.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Users
                    </p>
                </a>
            </li>

            <li class="nav-item mt-2">
                <a href="{{route('admin.post.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Posts
                    </p>
                </a>
            </li>

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
                    <i class="nav-icon fas fa-tags"></i>
                    <p>
                        Tags
                    </p>
                </a>
            </li>


        </ul>

    </div>
    <!-- /.sidebar -->
</aside>
