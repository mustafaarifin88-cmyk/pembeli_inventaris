<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-white font-weight-bold" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Data Peminjaman</h1>
            <p class="mb-0 text-white-50">Monitoring transaksi peminjaman barang aset</p>
        </div>
        <button class="btn btn-light text-primary font-weight-bold shadow-sm" data-toggle="modal" data-target="#tambahPinjamModal" style="border-radius: 30px; padding: 10px 25px;">
            <i class="fas fa-plus mr-2"></i> Buat Peminjaman
        </button>
    </div>

    <div class="card border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;">
        <div class="card-header bg-white py-3 border-0">
            <h6 class="m-0 font-weight-bold text-primary">Riwayat Transaksi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" width="100%" cellspacing="0">
                    <thead style="background-color: #f8f9fc; color: #858796;">
                        <tr style="text-transform: uppercase; font-size: 0.8rem;">
                            <th class="border-0 rounded-left pl-4">No</th>
                            <th class="border-0">Peminjam</th>
                            <th class="border-0">Barang</th>
                            <th class="border-0">Tgl Pinjam</th>
                            <th class="border-0">Rencana Kembali</th>
                            <th class="border-0 text-center">Jml</th>
                            <th class="border-0 text-center">Status</th>
                            <th class="border-0 rounded-right text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($peminjaman as $row) : ?>
                        <tr>
                            <td class="pl-4 align-middle font-weight-bold text-gray-800"><?= $no++ ?></td>
                            <td class="align-middle">
                                <div class="font-weight-bold text-dark"><?= $row->nama_peminjam ?></div>
                                <small class="text-muted"><i class="fas fa-building mr-1"></i> <?= $row->instansi ?></small>
                            </td>
                            <td class="align-middle font-weight-bold text-primary"><?= $row->nama_barang ?></td>
                            <td class="align-middle"><?= $row->tgl_pinjam ?></td>
                            <td class="align-middle"><?= $row->tgl_kembali ?></td>
                            <td class="align-middle text-center font-weight-bold"><?= $row->jumlah ?></td>
                            <td class="align-middle text-center">
                                <?php if($row->status_kembali == '1'): ?>
                                    <span class="badge badge-success px-3 py-2 shadow-sm" style="border-radius: 20px;">
                                        <i class="fas fa-check mr-1"></i> Kembali
                                    </span>
                                <?php else: ?>
                                    <span class="badge badge-warning text-white px-3 py-2 shadow-sm" style="border-radius: 20px;">
                                        <i class="fas fa-clock mr-1"></i> Pinjam
                                    </span>
                                <?php endif; ?>
                            </td>
                            <td class="align-middle text-center">
                                <button class="btn btn-light text-info btn-sm btn-edit shadow-sm" 
                                    style="border-radius: 10px;"
                                    data-id="<?= $row->id_pinjam ?>"
                                    data-nama="<?= $row->nama_peminjam ?>"
                                    data-instansi="<?= $row->instansi ?>"
                                    data-barang="<?= $row->id_barang ?>"
                                    data-jumlah="<?= $row->jumlah ?>"
                                    data-pinjam="<?= $row->tgl_pinjam ?>"
                                    data-kembali="<?= $row->tgl_kembali ?>"
                                    data-status="<?= $row->status_kembali ?>"
                                    data-toggle="modal" data-target="#editPinjamModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <a href="<?= base_url('peminjaman/hapus/' . $row->id_pinjam) ?>" 
                                   class="btn btn-light text-danger btn-sm shadow-sm ml-1" 
                                   style="border-radius: 10px;"
                                   onclick="return confirm('Yakin hapus data ini?')">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tambahPinjamModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content border-0" style="border-radius: 20px;">
            <div class="modal-header bg-primary text-white" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
                <h5 class="modal-title font-weight-bold">Form Peminjaman Baru</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('peminjaman/tambah_aksi') ?>" method="post">
                <div class="modal-body bg-light">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card shadow-sm border-0 mb-3" style="border-radius: 15px;">
                                <div class="card-body">
                                    <h6 class="font-weight-bold text-primary mb-3">Data Peminjam</h6>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Nama Peminjam</label>
                                        <input type="text" name="nama_peminjam" class="form-control" style="border-radius: 10px;" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Instansi / Bagian</label>
                                        <input type="text" name="instansi" class="form-control" style="border-radius: 10px;" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card shadow-sm border-0 mb-3" style="border-radius: 15px;">
                                <div class="card-body">
                                    <h6 class="font-weight-bold text-primary mb-3">Detail Barang</h6>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Pilih Barang</label>
                                        <select name="id_barang" class="form-control" style="border-radius: 10px;" required>
                                            <option value="">-- Pilih Barang --</option>
                                            <?php foreach($barang_list as $b) : ?>
                                                <option value="<?= $b->id_barang ?>"><?= $b->nama_barang ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Jumlah Pinjam</label>
                                        <input type="number" name="jumlah" class="form-control" style="border-radius: 10px;" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card shadow-sm border-0" style="border-radius: 15px;">
                                <div class="card-body">
                                    <h6 class="font-weight-bold text-primary mb-3">Waktu Peminjaman</h6>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label class="small font-weight-bold text-gray-600">Tanggal Pinjam</label>
                                            <input type="date" name="tgl_pinjam" class="form-control" style="border-radius: 10px;" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="small font-weight-bold text-gray-600">Rencana Kembali</label>
                                            <input type="date" name="tgl_kembali" class="form-control" style="border-radius: 10px;" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light border-0">
                    <button type="button" class="btn btn-secondary shadow-sm" data-dismiss="modal" style="border-radius: 10px;">Batal</button>
                    <button type="submit" class="btn btn-primary shadow-sm px-4" style="border-radius: 10px;">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editPinjamModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content border-0" style="border-radius: 20px;">
            <div class="modal-header bg-info text-white" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
                <h5 class="modal-title font-weight-bold">Edit Data Peminjaman</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('peminjaman/update_aksi') ?>" method="post">
                <div class="modal-body bg-light">
                    <input type="hidden" name="id_pinjam" id="edit_id">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card shadow-sm border-0 mb-3" style="border-radius: 15px;">
                                <div class="card-body">
                                    <h6 class="font-weight-bold text-info mb-3">Data Peminjam</h6>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Nama Peminjam</label>
                                        <input type="text" name="nama_peminjam" id="edit_nama" class="form-control" style="border-radius: 10px;" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Instansi / Bagian</label>
                                        <input type="text" name="instansi" id="edit_instansi" class="form-control" style="border-radius: 10px;" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card shadow-sm border-0 mb-3" style="border-radius: 15px;">
                                <div class="card-body">
                                    <h6 class="font-weight-bold text-info mb-3">Detail Barang</h6>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Pilih Barang</label>
                                        <select name="id_barang" id="edit_barang" class="form-control" style="border-radius: 10px;" required>
                                            <?php foreach($barang_list as $b) : ?>
                                                <option value="<?= $b->id_barang ?>"><?= $b->nama_barang ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Jumlah Pinjam</label>
                                        <input type="number" name="jumlah" id="edit_jumlah" class="form-control" style="border-radius: 10px;" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card shadow-sm border-0" style="border-radius: 15px;">
                                <div class="card-body">
                                    <h6 class="font-weight-bold text-info mb-3">Status & Waktu</h6>
                                    <div class="row">
                                        <div class="col-md-4 form-group">
                                            <label class="small font-weight-bold text-gray-600">Tanggal Pinjam</label>
                                            <input type="date" name="tgl_pinjam" id="edit_pinjam" class="form-control" style="border-radius: 10px;" required>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label class="small font-weight-bold text-gray-600">Rencana Kembali</label>
                                            <input type="date" name="tgl_kembali" id="edit_kembali" class="form-control" style="border-radius: 10px;" required>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label class="small font-weight-bold text-gray-600">Status Pengembalian</label>
                                            <select name="status_kembali" id="edit_status" class="form-control font-weight-bold" style="border-radius: 10px;">
                                                <option value="0" class="text-danger">Belum Kembali</option>
                                                <option value="1" class="text-success">Sudah Kembali</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light border-0">
                    <button type="button" class="btn btn-secondary shadow-sm" data-dismiss="modal" style="border-radius: 10px;">Batal</button>
                    <button type="submit" class="btn btn-info shadow-sm px-4" style="border-radius: 10px;">Update Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script>
    $(document).ready(function() {
        $('.btn-edit').on('click', function() {
            const id = $(this).data('id');
            const nama = $(this).data('nama');
            const instansi = $(this).data('instansi');
            const barang = $(this).data('barang');
            const jumlah = $(this).data('jumlah');
            const pinjam = $(this).data('pinjam');
            const kembali = $(this).data('kembali');
            const status = $(this).data('status');

            $('#edit_id').val(id);
            $('#edit_nama').val(nama);
            $('#edit_instansi').val(instansi);
            $('#edit_barang').val(barang);
            $('#edit_jumlah').val(jumlah);
            $('#edit_pinjam').val(pinjam);
            $('#edit_kembali').val(kembali);
            $('#edit_status').val(status);
        });
    });
</script>