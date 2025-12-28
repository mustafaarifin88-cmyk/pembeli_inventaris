<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-white font-weight-bold" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Data Peminjaman</h1>
            <p class="mb-0 text-white-50">Monitoring transaksi peminjaman barang aset</p>
        </div>
        <button class="btn btn-light text-primary font-weight-bold shadow-sm" style="border-radius: 30px; padding: 10px 25px;">
            <i class="fas fa-file-export mr-2"></i> Export Data
        </button>
    </div>

    <div class="card border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;">
        <div class="card-header bg-white py-3 border-0">
            <h6 class="m-0 font-weight-bold text-primary">Riwayat Transaksi</h6>
        </div>
        <div class="card-body">
            
            <div class="alert alert-light border-left-warning shadow-sm mb-4" role="alert" style="border-radius: 10px;">
                <div class="d-flex align-items-center">
                    <div class="icon-circle bg-warning text-white mr-3" style="width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <div>
                        <h6 class="font-weight-bold text-gray-800 mb-1">Informasi Database</h6>
                        <span class="small text-gray-600">Saat ini data hanya menampilkan ID Transaksi dan Status karena tabel relasi belum lengkap.</span>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-hover" width="100%" cellspacing="0">
                    <thead style="background-color: #f8f9fc; color: #858796;">
                        <tr style="text-transform: uppercase; font-size: 0.8rem;">
                            <th class="border-0 rounded-left pl-4" width="10%">No</th>
                            <th class="border-0" width="40%">ID Transaksi</th>
                            <th class="border-0 rounded-right text-center" width="50%">Status Pengembalian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($peminjaman as $row) : ?>
                        <tr>
                            <td class="pl-4 align-middle font-weight-bold text-gray-800"><?= $no++ ?></td>
                            <td class="align-middle">
                                <div class="d-flex align-items-center">
                                    <div class="btn-circle btn-sm bg-light text-primary mr-3 shadow-sm d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;">
                                        <i class="fas fa-receipt"></i>
                                    </div>
                                    <div>
                                        <span class="font-weight-bold text-dark">TRX-PINJAM-<?= str_pad($row->id_pinjam, 4, '0', STR_PAD_LEFT) ?></span>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle text-center">
                                <?php if($row->status_kembali == '1'): ?>
                                    <span class="badge badge-success px-3 py-2 shadow-sm" style="border-radius: 20px; font-weight: 600; font-size: 0.85rem;">
                                        <i class="fas fa-check-circle mr-2"></i> Sudah Dikembalikan
                                    </span>
                                <?php else: ?>
                                    <span class="badge badge-warning text-white px-3 py-2 shadow-sm" style="border-radius: 20px; font-weight: 600; font-size: 0.85rem;">
                                        <i class="fas fa-clock mr-2"></i> Belum Dikembalikan
                                    </span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>