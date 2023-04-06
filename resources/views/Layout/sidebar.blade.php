 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Main Menu
    </div>
    <!-- Nav Item - Tables -->
    
    <li class="nav-item {{ request()->is('admin/aboutme') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/aboutme">
            <i class="fas fa-fw fa-folder"></i>
            <span>About Me</span></a>
    </li>

    <li class="nav-item {{ request()->is('admin/biodata') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/biodata">
            <i class="fas fa-fw fa-folder"></i>
            <span>Biodata</span></a>
    </li>
    
    <!-- Nav Item - Tables -->
    <li class="nav-item {{ request()->is('admin/pendidikan') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/pendidikan">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pendidikan</span></a>
    </li>
   
    <li class="nav-item {{ request()->is('admin/card') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/card">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Prestasi</span></a>
    </li>

    <li class="nav-item {{ request()->is('admin/daftar') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/daftar">
            <i class="fas fa-fw fa-table"></i>
            <span>Daftar Mahasiswa</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->