<nav class="navbar navbar-expand d-flex bg-secondary bg-dark sticky-top px-4 py-0">
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="bi bi-filter-left"></i>
    </a>
        {{-- <form class="d-none d-md-flex ms-4">
            <input class="form-control border-0" type="search" placeholder="Search...">
        </form> --}}
    <div class="navbar-nav align-items-center ms-auto">
        
        <div class="dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="rounded-circle me-lg-2" src="/aset/img/profile/user-default.jpg" alt="" style="width: 35px; height: 35px;">
                <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end bg-dark border-0 rounded-0 rounded-bottom m-0" aria-labelledby="navbarDropdown">
                {{-- <li><a href="#" class="dropdown-item">My Profile</a></li>
                <li><a href="#" class="dropdown-item">Settings</a></li> --}}
                <li><a href="/logout" class="dropdown-item">Keluar</a></li>
            </ul>
        </div>
    </div>
</nav>