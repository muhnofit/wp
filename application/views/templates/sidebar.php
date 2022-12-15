<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"  id="accordionSidebar">
 
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-fire"></i>
        </div>
        <div class="sidebar-brand-text- mx-5">ASPEIN</div>
    </a>
 
    <!-- Divider -->
    <hr class="sidebar-divider">
 
    <!-- Looping Menu-->
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link pb-0" href="<?=base_url('Home/stage'); ?>">
            <i class="fa fa-fw fa-home"></i>
            <span>Home</span> 
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link pb-0" href="<?=base_url('News/berita'); ?>">
            <i class="fa fa-fw fa-newspaper"></i>
            <span>News</span> 
            </a>
        </li>
        <li class="nav-item">
        <a class="nav-link pb-0" href="<?=base_url('page/contact'); ?>">
            <i class="fa fa-fw fa-phone"></i>
            <span>Saran & Kritik</span>
        </a>
    </li>
        <li class="nav-item">
            <a class="nav-link pb-0" href="<?=base_url('buku/kategori'); ?>">
            <i class="fa fa-fw fa-bars"></i>
            <span>Menu Management</span> 
            </a>
        </li>           
    <!-- Divider -->
    <hr class="sidebar-divider mt-3">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -- > 