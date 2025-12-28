<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>StokKita - <?= isset($title) ? $title : 'App' ?></title>

    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?= base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

    <style>
        /* === BACKGROUND ANIMASI RADIASI === */
        body {
            background: linear-gradient(-45deg, #0f0c29, #302b63, #24243e, #1CB5E0, #000046);
            background-size: 400% 400%;
            animation: radiationBG 15s ease infinite;
            font-family: 'Nunito', sans-serif;
            color: #fff;
        }

        @keyframes radiationBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* === GLASSMORPHISM SIDEBAR === */
        .sidebar {
            background: rgba(255, 255, 255, 0.1) !important;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-right: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar .nav-item .nav-link {
            color: rgba(255, 255, 255, 0.8) !important;
            transition: all 0.3s;
            border-radius: 10px;
            margin: 0 10px;
        }

        .sidebar .nav-item .nav-link:hover, 
        .sidebar .nav-item.active .nav-link {
            background: rgba(255, 255, 255, 0.2);
            color: #fff !important;
            transform: translateX(5px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .sidebar-heading {
            color: rgba(255,255,255,0.5) !important;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-size: 0.7rem;
        }

        .sidebar-divider {
            border-top: 1px solid rgba(255,255,255,0.1) !important;
        }

        /* === PROFIL ADMIN SECTION === */
        .admin-profile-section {
            text-align: center;
            padding: 30px 15px;
            background: rgba(0,0,0,0.2);
            margin-bottom: 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .admin-profile-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid rgba(255,255,255,0.3);
            box-shadow: 0 0 20px rgba(255,255,255,0.2);
            transition: transform 0.3s;
        }

        .admin-profile-img:hover {
            transform: scale(1.05) rotate(5deg);
        }

        .admin-name {
            color: white;
            font-weight: 800;
            font-size: 1.2rem;
            margin-top: 15px;
            text-shadow: 0 2px 5px rgba(0,0,0,0.3);
        }

        /* === CONTENT AREA === */
        #content-wrapper {
            background: transparent !important;
        }

        #content {
            background: transparent !important;
        }

        .topbar {
            background: rgba(255, 255, 255, 0.1) !important;
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 30px;
        }

        /* === MODERN CARDS === */
        .card {
            background: rgba(255, 255, 255, 0.95);
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2) !important;
            overflow: hidden;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-header {
            background: #fff;
            border-bottom: 1px solid #eee;
            font-weight: bold;
            color: #4e73df;
        }

        /* === TEXT & TABLE ADJUSTMENTS === */
        h1.h3 {
            color: #fff !important;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
            font-weight: 700;
        }

        .text-gray-800 {
            color: #333 !important;
        }
        
        .breadcrumb {
            background: rgba(255,255,255,0.1);
            border-radius: 10px;
        }
        
        .breadcrumb-item a { color: #fff; }
        .breadcrumb-item.active { color: rgba(255,255,255,0.7); }

    </style>
</head>

<body id="page-top">

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar accordion" id="accordionSidebar">

            <!-- BAGIAN FOTO PROFIL ADMIN (KEMBALI KE STATIC) -->
            <li class="nav-item">
                <div class="admin-profile-section">
                    <!-- Pastikan file foto.jpg ada di folder assets atau ganti nama filenya -->
                    <img src="<?= base_url('assets/foto.jpg'); ?>" 
                         class="admin-profile-img" 
                         alt="Admin Photo"
                         onerror="this.src='https://source.unsplash.com/Mv9hjnEUHR4/100x100'">
                    <div class="admin-name">Administrator</div>
                    <small class="text-white-50">System Manager</small>
                </div>
            </li>

            <div class="sidebar-heading">
                Navigasi Utama
            </div>

            <li class="nav-item <?= $this->uri->segment(1) == 'dashboard' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Master Data
            </div>

            <li class="nav-item <?= $this->uri->segment(1) == 'barang' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('barang') ?>">
                    <i class="fas fa-fw fa-box-open"></i>
                    <span>Data Barang</span></a>
            </li>

            <li class="nav-item <?= $this->uri->segment(1) == 'suplier' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('suplier') ?>">
                    <i class="fas fa-fw fa-truck-loading"></i>
                    <span>Data Suplier</span></a>
            </li>


            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Logistik & Transaksi
            </div>

            <li class="nav-item <?= $this->uri->segment(1) == 'peminjaman' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('peminjaman') ?>">
                    <i class="fas fa-fw fa-hand-holding"></i>
                    <span>Peminjaman</span></a>
            </li>

            <li class="nav-item <?= $this->uri->segment(1) == 'masuk' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('masuk') ?>">
                    <i class="fas fa-fw fa-arrow-down"></i>
                    <span>Barang Masuk</span></a>
            </li>

            <li class="nav-item <?= $this->uri->segment(1) == 'keluar' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('keluar') ?>">
                    <i class="fas fa-fw fa-arrow-up"></i>
                    <span>Barang Keluar</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0 bg-white text-primary" id="sidebarToggle"></button>
            </div>

        </ul>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top">

                    <button id="sidebarToggleTop" class="btn btn-light d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="d-none d-sm-block ml-3">
                        <h5 class="m-0 font-weight-bold text-white">Sistem Inventaris StokKita</h5>
                    </div>

                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!-- KEMBALI KE STATIC -->
                                <span class="mr-2 d-none d-lg-inline text-white small font-weight-bold">Halo, Admin</span>
                                <img class="img-profile rounded-circle border-white border"
                                    src="<?= base_url('assets/foto.jpg') ?>" onerror="this.src='<?= base_url('assets/img/profil.jpg') ?>'">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <!-- Link Logout hanya formalitas karena tidak ada sesi -->
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                <!-- DYNAMIC CONTENT -->
                <?php 
                    if (isset($content) && $content) {
                        $this->load->view($content);
                    }
                ?>

            </div>

            <footer class="sticky-footer" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px);">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto text-white">
                        <span>Copyright &copy; StokKita 2025 | Didesain Modern</span>
                    </div>
                </div>
            </footer>

        </div>

    </div>

    <a class="scroll-to-top rounded bg-white text-dark" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Siap untuk pergi?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" jika Anda ingin mengakhiri sesi ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-danger" href="#">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/sb-admin-2.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/chart.js/Chart.min.js'); ?>"></script>

</body>
</html>