<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container-fluid px-4">
        <a class="navbar-brand" href="#">
            <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" width="30" height="24">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-1">

                <li class="nav-item">
                    <a class="
                    nav-link {{ request()->routeIs('admin.home') ? 'active' : '' }}
                    " href="{{ Route('admin.home') }}">
                        <i class="bi bi-house-door me-1"></i>
                        Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a class="
                    nav-link {{ request()->routeIs('admin.category.*') ? 'active' : '' }}
                    " href="{{ Route('admin.category.index') }}">
                        <i class="bi bi-tags me-1"></i>
                        Categories
                    </a>
                </li>

                <li class="nav-item">
                    <a class="
                    nav-link {{ request()->routeIs('admin.posts.*') ? 'active' : '' }}
                    " href="{{ Route('admin.posts.index') }}">
                        <i class="bi bi-box-seam me-1"></i>
                        Posts
                    </a>
                </li>

                <li class="nav-item"><a class="nav-link" href="index.html">
                        <i class="bi bi-person me-2"></i>
                        Users
                    </a>
                </li>



                </li>
                <!-- <li class="nav-item"><a class="nav-link" href="settings.html"><i class="bi bi-gear me-1"></i>
                        Settings</a></li> -->
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center gap-2" href="#" role="button"
                        data-bs-toggle="dropdown">
                        <i class="bi bi-person-circle fs-5"></i> Admin
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow border-0">
                        <!-- <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profile</a></li>
                        <li><a class="dropdown-item" href="settings.html"><i class="bi bi-gear me-2"></i>Settings</a> -->
                </li>
                <!-- <li>
                    <hr class="dropdown-divider">
                </li> -->
                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
                </li>
            </ul>
            </li>
            </ul>
        </div>
    </div>
</nav>
