<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-white font-weight-bold" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Barang Masuk</h1>
            <p class="mb-0 text-white-50">Riwayat penyetokan barang dari supplier</p>
        </div>
        <button class="btn btn-light text-primary font-weight-bold shadow-sm" data-toggle="modal" data-target="#tambahMasukModal" style="border-radius: 30px; padding: 10px 25px;">
            <i class="fas fa-plus mr-2"></i> Tambah Stok
        </button>
    </div>

    <div class="card border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;">
        <div class="card-header bg-white py-3 border-0">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Transaksi Masuk</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" width="100%" cellspacing="0">
                    <thead style="background-color: #f8f9fc; color: #858796;">
                        <tr style="text-transform: uppercase; font-size: 0.8rem;">
                            <th class="border-0 rounded-left pl-4">No</th>
                            <th class="border-0">Tanggal</th>
                            <th class="border-0">Barang</th>
                            <th class="border-0">Supplier</th>
                            <th class="border-0 text-center">Jumlah</th>
                            <th class="border-0">Keterangan</th>
                            <th class="border-0 rounded-right text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($masuk as $m) : ?>
                        <tr>
                            <td class="pl-4 align-middle font-weight-bold text-gray-800"><?= $no++ ?></td>
                            <td class="align-middle">
                                <i class="far fa-calendar-alt text-gray-400 mr-2"></i>
                                <?= $m->tgl_masuk ?>
                            </td>
                            <td class="align-middle font-weight-bold text-primary"><?= $m->nama_barang ?></td>
                            <td class="align-middle">
                                <span class="badge badge-light border px-2 py-1"><?= $m->nama_suplier ?></span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="badge badge-success px-3 py-2" style="border-radius: 10px; font-size: 0.9rem;">
                                    + <?= $m->jumlah ?>
                                </span>
                            </td>
                            <td class="align-middle text-gray-600 small"><?= $m->keterangan ?></td>
                            <td class="align-middle text-center">
                                <button class="btn btn-light text-warning btn-sm btn-edit shadow-sm" 
                                    style="border-radius: 10px;"
                                    data-id="<?= $m->id_masuk ?>" 
                                    data-tgl="<?= $m->tgl_masuk ?>"
                                    data-barang="<?= $m->id_barang ?>"
                                    data-suplier="<?= $m->id_suplier ?>"
                                    data-jumlah="<?= $m->jumlah ?>"
                                    data-ket="<?= $m->keterangan ?>"
                                    data-toggle="modal" data-target="#editMasukModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <a href="<?= base_url('masuk/hapus/' . $m->id_masuk) ?>" 
                                   class="btn btn-light text-danger btn-sm shadow-sm ml-2" 
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

<div class="modal fade" id="tambahMasukModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content border-0" style="border-radius: 20px;">
            <div class="modal-header bg-primary text-white" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
                <h5 class="modal-title font-weight-bold">Input Barang Masuk</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('masuk/tambah_aksi') ?>" method="post">
                <div class="modal-body bg-light">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card shadow-sm border-0 mb-3" style="border-radius: 15px;">
                                <div class="card-body">
                                    <h6 class="font-weight-bold text-primary mb-3">Data Transaksi</h6>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Tanggal Masuk</label>
                                        <input type="date" name="tgl_masuk" class="form-control" style="border-radius: 10px;" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Pilih Barang</label>
                                        <select name="id_barang" class="form-control" style="border-radius: 10px;" required>
                                            <option value="">-- Pilih Barang --</option>
                                            <?php foreach($barang_list as $b) : ?>
                                                <option value="<?= $b->id_barang ?>"><?= $b->nama_barang ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card shadow-sm border-0 mb-3" style="border-radius: 15px;">
                                <div class="card-body">
                                    <h6 class="font-weight-bold text-primary mb-3">Detail Supplier & Stok</h6>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Supplier</label>
                                        <select name="id_suplier" class="form-control" style="border-radius: 10px;" required>
                                            <option value="">-- Pilih Supplier --</option>
                                            <?php foreach($suplier_list as $s) : ?>
                                                <option value="<?= $s->id_suplier ?>"><?= $s->nama_suplier ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Jumlah Masuk</label>
                                        <input type="number" name="jumlah" class="form-control font-weight-bold text-center" style="border-radius: 10px;" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                             <div class="form-group px-2">
                                <label class="small font-weight-bold text-gray-600">Keterangan</label>
                                <textarea name="keterangan" class="form-control" style="border-radius: 15px;" rows="2" placeholder="Catatan tambahan..."></textarea>
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

<div class="modal fade" id="editMasukModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content border-0" style="border-radius: 20px;">
            <div class="modal-header bg-warning text-white" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
                <h5 class="modal-title font-weight-bold">Edit Transaksi Masuk</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('masuk/update_aksi') ?>" method="post">
                <div class="modal-body bg-light">
                    <input type="hidden" name="id_masuk" id="edit_id">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card shadow-sm border-0 mb-3" style="border-radius: 15px;">
                                <div class="card-body">
                                    <h6 class="font-weight-bold text-warning mb-3">Data Transaksi</h6>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Tanggal Masuk</label>
                                        <input type="date" name="tgl_masuk" id="edit_tgl" class="form-control" style="border-radius: 10px;" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Pilih Barang</label>
                                        <select name="id_barang" id="edit_barang" class="form-control" style="border-radius: 10px;" required>
                                            <?php foreach($barang_list as $b) : ?>
                                                <option value="<?= $b->id_barang ?>"><?= $b->nama_barang ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card shadow-sm border-0 mb-3" style="border-radius: 15px;">
                                <div class="card-body">
                                    <h6 class="font-weight-bold text-warning mb-3">Detail Supplier & Stok</h6>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Supplier</label>
                                        <select name="id_suplier" id="edit_suplier" class="form-control" style="border-radius: 10px;" required>
                                            <?php foreach($suplier_list as $s) : ?>
                                                <option value="<?= $s->id_suplier ?>"><?= $s->nama_suplier ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Jumlah Masuk</label>
                                        <input type="number" name="jumlah" id="edit_jumlah" class="form-control font-weight-bold text-center" style="border-radius: 10px;" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                             <div class="form-group px-2">
                                <label class="small font-weight-bold text-gray-600">Keterangan</label>
                                <textarea name="keterangan" id="edit_ket" class="form-control" style="border-radius: 15px;" rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light border-0">
                    <button type="button" class="btn btn-secondary shadow-sm" data-dismiss="modal" style="border-radius: 10px;">Batal</button>
                    <button type="submit" class="btn btn-warning shadow-sm px-4 text-white" style="border-radius: 10px;">Update Data</button>
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
            const tgl = $(this).data('tgl');
            const barang = $(this).data('barang');
            const suplier = $(this).data('suplier');
            const jumlah = $(this).data('jumlah');
            const ket = $(this).data('ket');

            $('#edit_id').val(id);
            $('#edit_tgl').val(tgl);
            $('#edit_barang').val(barang);
            $('#edit_suplier').val(suplier);
            $('#edit_jumlah').val(jumlah);
            $('#edit_ket').val(ket);
        });
    });
</script>