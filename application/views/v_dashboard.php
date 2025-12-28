<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-white font-weight-bold" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Dashboard Overview</h1>
        
    </div>

    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow h-100 py-2" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border-radius: 15px;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1" style="opacity: 0.8;">Total Barang</div>
                            <div class="h5 mb-0 font-weight-bold"><?= isset($total_barang) ? $total_barang : 0 ?> Item</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-box fa-2x text-white-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow h-100 py-2" style="background: linear-gradient(135deg, #13547a 0%, #80d0c7 100%); color: white; border-radius: 15px;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1" style="opacity: 0.8;">Total Pengguna</div>
                            <div class="h5 mb-0 font-weight-bold"><?= isset($total_pengguna) ? $total_pengguna : 0 ?> User</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-white-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow h-100 py-2" style="background: linear-gradient(135deg, #ff0844 0%, #ffb199 100%); color: white; border-radius: 15px;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1" style="opacity: 0.8;">Total Suplier</div>
                            <div class="h5 mb-0 font-weight-bold"><?= isset($total_suplier) ? $total_suplier : 0 ?> Vendor</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-truck fa-2x text-white-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow h-100 py-2" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); color: white; border-radius: 15px;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1" style="opacity: 0.8;">Peminjaman</div>
                            <div class="h5 mb-0 font-weight-bold"><?= isset($total_pinjam) ? $total_pinjam : 0 ?> Transaksi</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-handshake fa-2x text-white-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2" style="border-radius: 15px;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Barang Masuk</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= isset($total_masuk) ? $total_masuk : 0 ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-arrow-down fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2" style="border-radius: 15px;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Barang Keluar</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= isset($total_keluar) ? $total_keluar : 0 ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-arrow-up fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2" style="border-radius: 15px;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sudah Kembali</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= isset($total_kembali) ? $total_kembali : 0 ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2" style="border-radius: 15px;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Belum Kembali</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= isset($total_belum) ? $total_belum : 0 ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-exclamation-triangle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4" style="border-radius: 20px; overflow: hidden;">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-white">
                    <h6 class="m-0 font-weight-bold text-primary">Informasi Pengguna Login</h6>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center">
                            <img src="<?= base_url('assets/foto.jpg') ?>" class="img-fluid rounded-circle shadow" style="width: 100px; height: 100px; object-fit: cover;" onerror="this.src='<?= base_url('assets/img/profil.jpg') ?>'">
                        </div>
                        <div class="col-md-10">
                            <h4 class="font-weight-bold text-gray-800">Fadhillah Fajar Saputra</h4>
                            <p class="text-muted mb-1">Administrator System</p>
                            <span class="badge badge-success px-3 py-2" style="border-radius: 10px;">Status: Online</span>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <small class="text-uppercase text-muted font-weight-bold">Username</small>
                                    <h6 class="font-weight-bold text-gray-800">admin</h6>
                                </div>
                                <div class="col-md-4">
                                    <small class="text-uppercase text-muted font-weight-bold">Akses Level</small>
                                    <h6 class="font-weight-bold text-gray-800">Super Admin</h6>&
                                </div>
                                <div class="col-md-4">
                                    <small class="text-uppercase text-muted font-weight-bold">Last Login</small>
                                    <h6 class="font-weight-bold text-gray-800"><?= date('d F Y H:i') ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>