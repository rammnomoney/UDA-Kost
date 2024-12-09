<!-- Sidebar -->
<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-dark">
    <div class="position-sticky">
        
        <div class="flex items-center justify-center mx-5">
            <a href="/" class="flex position-relative mb-3 md-mb-4 md:me-auto text-white no-underline">
                <img src="img/Udakost/transparent-udakost/Uda Kost Logo.png" class="w-12 h-12 object-contain" width="150" height="50" alt="Uda Kost Logo">
            </a>        
        </div>
        
        <br>
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel pb-3 mb-3 d-flex">
            <a href="{{ ('#') }}" class="d-block w-100 text-center">{{ Auth::user()->name }}</a>
        </div>

        <div class="list-group list-group-flush mt-4 text-center">
            <a href="{{ ('/home') }}" class="list-group-item list-group-item-action py-2 ripple bg-dark text-white">
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
            </a>
        </div>
    </div>
    <!-- /.sidebar-menu -->
</nav>
<!-- /.sidebar -->