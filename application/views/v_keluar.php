<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-white font-weight-bold" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Barang Keluar</h1>
            <p class="mb-0 text-white-50">Rekapitulasi stok barang yang didistribusikan keluar gudang</p>
        </div>
        <button class="btn btn-light text-primary font-weight-bold shadow-sm" style="border-radius: 30px; padding: 10px 25px;">
            <i class="fas fa-print mr-2"></i> Cetak Laporan
        </button>
    </div>

    <div class="card border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;">
        <div class="card-header bg-white py-3 border-0">
            <h6 class="m-0 font-weight-bold text-danger">Log Transaksi Keluar</h6>
        </div>
        <div class="card-body">
            
            <div class="alert alert-light border-left-danger shadow-sm mb-4" role="alert" style="border-radius: 10px;">
                <div class="d-flex align-items-center">
                    <div class="icon-circle bg-danger text-white mr-3" style="width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-exclamation-circle"></i>
                    </div>
                    <div>
                        <h6 class="font-weight-bold text-gray-800 mb-1">Status Data</h6>
                        <span class="small text-gray-600">Menampilkan ID transaksi distribusi. Detail item barang yang dikeluarkan belum tersedia di database.</span>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-hover" width="100%" cellspacing="0">
                    <thead style="background-color: #f8f9fc; color: #858796;">
                        <tr style="text-transform: uppercase; font-size: 0.8rem;">
                            <th class="border-0 rounded-left pl-4" width="10%">No</th>
                            <th class="border-0" width="40%">ID Transaksi</th>
                            <th class="border-0 rounded-right text-center" width="50%">Tanggal Pengeluaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($keluar as $row) : ?>
                        <tr>
                            <td class="pl-4 align-middle font-weight-bold text-gray-800"><?= $no++ ?></td>
                            <td class="align-middle">
                                <div class="d-flex align-items-center">
                                    <div class="btn-circle btn-sm bg-light text-danger mr-3 shadow-sm d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;">
                                        <i class="fas fa-arrow-up"></i>
                                    </div>
                                    <div>
                                        <span class="font-weight-bold text-dark">TRX-OUT-<?= str_pad($row->id_keluar, 5, '0', STR_PAD_LEFT) ?></span>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle text-center">
                                <span class="badge badge-light px-3 py-2 shadow-sm border" style="border-radius: 20px; font-size: 0.85rem; color: #5a5c69;">
                                    <i class="far fa-calendar-times mr-2 text-danger"></i> <?= date('d F Y', strtotime($row->tgl_keluar)) ?>
                                </span>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>