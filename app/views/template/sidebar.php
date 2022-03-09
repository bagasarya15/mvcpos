    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= BASEURL; ?>/#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-store-alt"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SR - POS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= $title === 'home' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= BASEURL; ?>/home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Supplier -->
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/supplier">
                    <i class="fas fa-truck"></i>
                    <span>Supplier</span></a>
            </li>

            <!-- Nav Item - Customer -->
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/customer">
                    <i class="fas fa-users"></i>
                    <span>Customer</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu Produk-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#produk" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-box-open"></i>
                    <span>Produk</span>
                </a>
                <div id="produk" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= BASEURL; ?>/produk">Produk</a>
                        <a class="collapse-item" href="<?= BASEURL; ?>/kategori">Kategori</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Transaksi -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#transaksi" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Transaksi</span>
                </a>
                <div id="transaksi" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= BASEURL; ?>/transaksi">Transaksi Penjualan</a>
                        <a class="collapse-item" href="<?= BASEURL; ?>/transaksi/riwayatTransaksi">Riwayat Transaksi</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu Laporan-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#laporan" aria-expanded="true" aria-controls="laporan">
                    <i class="fas fa-chart-pie"></i>
                    <span>Laporan</span>
                </a>
                <div id="laporan" class="collapse" aria-labelledby="laporan" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">Laporan Penjualan</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            
            <div class="sidebar-heading">
                Setting
            </div>
            <!-- Nav Item - Utilities Collapse Menu Setting -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#userEmploye" aria-expanded="true" aria-controls="userEmploye">
                    <i class="fas fa-fw fa-user-cog"></i>
                    <span>User</span>
                </a>
                <div id="userEmploye" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= BASEURL; ?>/auth/kasir">Kasir</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->