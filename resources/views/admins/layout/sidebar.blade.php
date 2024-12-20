<!-- Sidebar -->
<div class="sidebar bg-secondary bg-dark pe-4 pb-3">
    <nav class="navbar">
        <div class="bottom mx-5">
        <a href="/" class="navbar-brand mx-4 mb-3">
            {{-- <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;"> --}}
            <h3 class="text-primary">UDA Kost!?</h3>
        </a>
        </div>       
           
        <div class="navbar-nav w-100">
            <a href="{{ url('/home') }}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>{{ __('Home') }}</a>
            
            <a href="{{ url('/pemilik') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>{{ __('Admin') }}</a>
            <a href="{{ url('/kos') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>{{ __('Kos') }}</a>
            <a href="{{ url('/penyewa') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>{{ __('Penghuni') }}</a>
            <a href="{{ url('/pilih-kos') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>{{ __('Kontrak') }}</a>
            <a href="{{ url('/laporan') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>{{ __('Laporan') }}</a>
        </div>
    </nav>
</div>

    {{-- <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-dark">
        <br> <br> <br>
        <div class="flex items-center justify-center mx-5"> 
            <a href="/" class="flex position-relative mb-3 md-mb-4 md:me-auto text-white no-underline">
                <img src="img/Udakost/transparent-udakost/Uda Kost Logo.png" class="w-12 h-12 object-contain" width="150" height="50" alt="Uda Kost Logo">
            </a>        
        </div>
        <br>
        <!-- Sidebar user panel (optional) -->
        <div class="navbar-nav w-100"> 
            <div class="user-panel pb-3 mb-3 d-flex">
                <a href="{{ ('#') }}" class="d-block w-100 text-center">{{ Auth::user()->name }}</a>
            </div>

            <div class="list-group list-group-flush mt-4 text-center"> 
                <a href="{{ ('/home') }}" class="nav-item nav-link active">
                    <i class="nav-icon fas fa-th"></i>
                    <span>
                        {{ __('Home') }}
                    </span>
                </a>     
        </div>
    </nav>--}}

                {{-- <a href="{{ ('/home') }}" class="list-group-item list-group-item-action py-2 ripple bg-dark text-white">
                    <i class="nav-icon fas fa-th"></i>
                    <span>
                        {{ __('Home') }}
                    </span>
                </a>

                <a href="{{ ('/pemilik') }}" class="list-group-item list-group-item-action py-2 ripple bg-dark text-white">
                    <i class="nav-icon fa fa-inbox"></i>
                    <span>
                        {{ __('Admin') }}
                    </span>
                </a>

                <a href="{{ ('/kos') }}" class="list-group-item list-group-item-action py-2 ripple bg-dark text-white">
                    <i class="nav-icon fa fa-car"></i>
                    <span>
                        {{ __('Kos') }}
                    </span>
                </a>
                
                <a href="{{ ('/penyewa') }}" class="list-group-item list-group-item-action py-2 ripple bg-dark text-white">
                    <i class="nav-icon fa fa-quote-left"></i>
                    <span>
                        {{ __('Penghuni') }}
                    </span>
                </a>

                <a href="{{ ('/pilih-kos') }}" class="list-group-item list-group-item-action py-2 ripple bg-dark text-white">
                    <i class="nav-icon fa fa-rss"></i>
                    <span>
                        {{ __('Kontrak') }}
                    </span>
                </a>

                <a href="{{ ('/laporan') }}" class="list-group-item list-group-item-action py-2 ripple bg-dark text-white">
                    <i class="nav-icon fa fa-users"></i>
                    <span>
                        {{ __('Laporan') }}
                    </span>
                </a> --}}
            {{-- </div> --}}
        
        <!-- /.sidebar-menu -->

<!-- /.sidebar -->

{{-- <nav class="navbar navbar-expand bg-secondary bg-dark sticky-top px-4 py-0">
    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <form class="d-none d-md-flex ms-4">
        <input class="form-control bg-dark border-0" type="search" placeholder="Search">
    </form>
    <div class="navbar-nav align-items-center ms-auto">
        
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img class="rounded-circle me-lg-2" src="/img/profile/CEO.jpg" alt="" style="width: 40px; height: 40px;">
                <span class="d-none d-lg-inline-flex">John Doe</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                <a href="#" class="dropdown-item">My Profile</a>
                <a href="#" class="dropdown-item">Settings</a>
                <a href="#" class="dropdown-item">Log Out</a>
            </div>
        </div>
    </div>
</nav> --}}
<!-- Navbar End -->