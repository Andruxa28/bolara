<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.index')}}" class="brand-link">
        <img src="{{asset ('assets/admin/img/AdminLTELogo.png')}}"
             alt="BigOrange Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">BigOrange Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset ('assets/admin/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Andrew Drozdiuk</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('admin.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Панель управления
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('admin.showcase')}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Витрины
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('articles.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                           Блог
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('categories.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Категории блога</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('articles.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Статьи блога</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('blog.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Настройки блога</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
