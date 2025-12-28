<style>
    .card-modern {
        border: none;
        border-radius: 15px;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        overflow: hidden;
    }
    
    .card-modern:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2) !important;
    }

    .bg-gradient-1 { background: linear-gradient(45deg, #4e73df, #224abe); }
    .bg-gradient-2 { background: linear-gradient(45deg, #1cc88a, #13855c); }
    .bg-gradient-3 { background: linear-gradient(45deg, #36b9cc, #258391); }
    .bg-gradient-4 { background: linear-gradient(45deg, #f6c23e, #dda20a); }
    .bg-gradient-5 { background: linear-gradient(45deg, #e74a3b, #be2617); }
    .bg-gradient-6 { background: linear-gradient(45deg, #858796, #60616f); }
    .bg-gradient-7 { background: linear-gradient(45deg, #5a5c69, #373840); }
    .bg-gradient-8 { background: linear-gradient(45deg, #6f42c1, #59359a); }

    .text-white-80 { color: rgba(255, 255, 255, 0.8); }
    .icon-overlay {
        opacity: 0.3;
        transform: rotate(-15deg) scale(1.5);
    }
</style>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Dashboard Overview</h1>
        <ol class="breadcrumb bg-transparent m-0 p-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>

    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm border-0 rounded-lg bg-white">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="font-weight-bold text-primary mb-2">Selamat Datang di StokKita!</h4>
                            <p class="text-secondary mb-0">Sistem informasi manajemen gudang yang modern dan efisien. Pantau semua aset dan transaksi Anda secara real-time di sini.</p>
                        </div>
                        <div class="col-md-4 text-right d-none d-md-block">
                            <i class="fas fa-warehouse fa-3x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card card-modern bg-gradient-1 shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white-80 text-uppercase mb-1">Total Barang</div>
                            <div class="h3 mb-0 font-weight-bold text-white"><?= isset($total_barang) ? $total_barang : 0 ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-box fa-2x text-white-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card card-modern bg-gradient-2 shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white-80 text-uppercase mb-1">Total Suplier</div>
                            <div class="h3 mb-0 font-weight-bold text-white"><?= isset($total_suplier) ? $total_suplier : 0 ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-truck fa-2x text-white-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card card-modern bg-gradient-3 shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white-80 text-uppercase mb-1">Total Pengguna</div>
                            <div class="h3 mb-0 font-weight-bold text-white"><?= isset($total_pengguna) ? $total_pengguna : 0 ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-white-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card card-modern bg-gradient-4 shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white-80 text-uppercase mb-1">Total Peminjaman</div>
                            <div class="h3 mb-0 font-weight-bold text-white"><?= isset($total_pinjam) ? $total_pinjam : 0 ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-white-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card card-modern bg-gradient-5 shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white-80 text-uppercase mb-1">Barang Masuk</div>
                            <div class="h3 mb-0 font-weight-bold text-white"><?= isset($total_masuk) ? $total_masuk : 0 ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-download fa-2x text-white-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card card-modern bg-gradient-6 shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white-80 text-uppercase mb-1">Barang Keluar</div>
                            <div class="h3 mb-0 font-weight-bold text-white"><?= isset($total_keluar) ? $total_keluar : 0 ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-upload fa-2x text-white-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card card-modern bg-gradient-7 shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white-80 text-uppercase mb-1">Sudah Kembali</div>
                            <div class="h3 mb-0 font-weight-bold text-white"><?= isset($total_kembali) ? $total_kembali : 0 ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check-circle fa-2x text-white-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card card-modern bg-gradient-8 shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white-80 text-uppercase mb-1">Belum Kembali</div>
                            <div class="h3 mb-0 font-weight-bold text-white"><?= isset($total_belum) ? $total_belum : 0 ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clock fa-2x text-white-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>