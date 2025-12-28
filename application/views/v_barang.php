<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-white font-weight-bold" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Data Barang</h1>
            <p class="mb-0 text-white-50">Manajemen inventaris aset dan stok barang</p>
        </div>
        <button class="btn btn-light text-primary font-weight-bold shadow-sm" data-toggle="modal" data-target="#tambahBarangModal" style="border-radius: 30px; padding: 10px 25px;">
            <i class="fas fa-plus mr-2"></i> Tambah Barang
        </button>
    </div>

    <div class="card border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;">
        <div class="card-header bg-white py-3 border-0">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Inventaris</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" width="100%" cellspacing="0">
                    <thead style="background-color: #f8f9fc; color: #858796;">
                        <tr style="text-transform: uppercase; font-size: 0.8rem;">
                            <th class="border-0 rounded-left pl-4">No</th>
                            <th class="border-0">Barang</th>
                            <th class="border-0">Spesifikasi</th>
                            <th class="border-0">Lokasi</th>
                            <th class="border-0">Kondisi</th>
                            <th class="border-0 text-center">Stok</th>
                            <th class="border-0 rounded-right text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($barang as $b) : ?>
                        <tr>
                            <td class="pl-4 align-middle font-weight-bold text-gray-800"><?= $no++ ?></td>
                            <td class="align-middle">
                                <div class="font-weight-bold text-primary"><?= $b->nama_barang ?></div>
                                <small class="text-muted"><?= $b->jenis ?></small>
                            </td>
                            <td class="align-middle text-gray-600"><?= $b->spesifikasi ?></td>
                            <td class="align-middle text-gray-600">
                                <i class="fas fa-map-marker-alt text-gray-400 mr-1"></i> <?= $b->lokasi ?>
                            </td>
                            <td class="align-middle">
                                <?php if($b->kondisi == 'BARU' || $b->kondisi == 'BAIK'): ?>
                                    <span class="badge badge-success px-3 py-2" style="border-radius: 10px; font-weight: 600;">BAIK</span>
                                <?php elseif($b->kondisi == 'RUSAK'): ?>
                                    <span class="badge badge-danger px-3 py-2" style="border-radius: 10px; font-weight: 600;">RUSAK</span>
                                <?php else: ?>
                                    <span class="badge badge-secondary px-3 py-2" style="border-radius: 10px; font-weight: 600;"><?= $b->kondisi ?></span>
                                <?php endif; ?>
                            </td>
                            <td class="align-middle text-center">
                                <div class="btn btn-sm btn-circle btn-info font-weight-bold" style="width: 35px; height: 35px; padding-top: 6px;">
                                    <?= $b->jumlah ?>
                                </div>
                            </td>
                            <td class="align-middle text-center">
                                <button class="btn btn-light text-warning btn-sm btn-edit shadow-sm" 
                                    style="border-radius: 10px;"
                                    data-id="<?= $b->id_barang ?>" 
                                    data-nama="<?= $b->nama_barang ?>"
                                    data-spek="<?= $b->spesifikasi ?>"
                                    data-lokasi="<?= $b->lokasi ?>"
                                    data-kondisi="<?= $b->kondisi ?>"
                                    data-jumlah="<?= $b->jumlah ?>"
                                    data-sumber="<?= $b->sumber_dana ?>"
                                    data-jenis="<?= $b->jenis ?>"
                                    data-ket="<?= $b->keterangan ?>"
                                    data-toggle="modal" data-target="#editBarangModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <a href="<?= base_url('barang/hapus/' . $b->id_barang) ?>" 
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

<div class="modal fade" id="tambahBarangModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content border-0" style="border-radius: 20px;">
            <div class="modal-header bg-primary text-white" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
                <h5 class="modal-title font-weight-bold">Tambah Data Barang</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('barang/tambah_aksi') ?>" method="post">
                <div class="modal-body bg-light">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card shadow-sm border-0 mb-3" style="border-radius: 15px;">
                                <div class="card-body">
                                    <h6 class="font-weight-bold text-primary mb-3">Informasi Dasar</h6>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Nama Barang</label>
                                        <input type="text" name="nama_barang" class="form-control" style="border-radius: 10px;" required placeholder="Contoh: Laptop Asus">
                                    </div>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Jenis / Kategori</label>
                                        <input type="text" name="jenis" class="form-control" style="border-radius: 10px;" placeholder="Elektronik">
                                    </div>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Spesifikasi</label>
                                        <input type="text" name="spesifikasi" class="form-control" style="border-radius: 10px;" placeholder="RAM 8GB, i5">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card shadow-sm border-0 mb-3" style="border-radius: 15px;">
                                <div class="card-body">
                                    <h6 class="font-weight-bold text-primary mb-3">Detail & Stok</h6>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="small font-weight-bold text-gray-600">Jumlah Stok</label>
                                            <input type="number" name="jumlah" class="form-control font-weight-bold text-center" style="border-radius: 10px;" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="small font-weight-bold text-gray-600">Kondisi</label>
                                            <select name="kondisi" class="form-control" style="border-radius: 10px;">
                                                <option value="BAIK">Baik</option>
                                                <option value="BARU">Baru</option>
                                                <option value="RUSAK">Rusak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Lokasi Penempatan</label>
                                        <input type="text" name="lokasi" class="form-control" style="border-radius: 10px;" placeholder="Gudang A">
                                    </div>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Sumber Dana</label>
                                        <input type="text" name="sumber_dana" class="form-control" style="border-radius: 10px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                             <div class="form-group px-2">
                                <label class="small font-weight-bold text-gray-600">Keterangan Tambahan</label>
                                <textarea name="keterangan" class="form-control" style="border-radius: 15px;" rows="2"></textarea>
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

<div class="modal fade" id="editBarangModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content border-0" style="border-radius: 20px;">
            <div class="modal-header bg-warning text-white" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
                <h5 class="modal-title font-weight-bold">Edit Data Barang</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('barang/update_aksi') ?>" method="post">
                <div class="modal-body bg-light">
                    <input type="hidden" name="id_barang" id="edit_id">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card shadow-sm border-0 mb-3" style="border-radius: 15px;">
                                <div class="card-body">
                                    <h6 class="font-weight-bold text-warning mb-3">Informasi Dasar</h6>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Nama Barang</label>
                                        <input type="text" name="nama_barang" id="edit_nama" class="form-control" style="border-radius: 10px;" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Jenis / Kategori</label>
                                        <input type="text" name="jenis" id="edit_jenis" class="form-control" style="border-radius: 10px;">
                                    </div>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Spesifikasi</label>
                                        <input type="text" name="spesifikasi" id="edit_spek" class="form-control" style="border-radius: 10px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card shadow-sm border-0 mb-3" style="border-radius: 15px;">
                                <div class="card-body">
                                    <h6 class="font-weight-bold text-warning mb-3">Detail & Stok</h6>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="small font-weight-bold text-gray-600">Jumlah Stok</label>
                                            <input type="number" name="jumlah" id="edit_jumlah" class="form-control font-weight-bold text-center" style="border-radius: 10px;" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="small font-weight-bold text-gray-600">Kondisi</label>
                                            <select name="kondisi" id="edit_kondisi" class="form-control" style="border-radius: 10px;">
                                                <option value="BAIK">Baik</option>
                                                <option value="BARU">Baru</option>
                                                <option value="RUSAK">Rusak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Lokasi Penempatan</label>
                                        <input type="text" name="lokasi" id="edit_lokasi" class="form-control" style="border-radius: 10px;">
                                    </div>
                                    <div class="form-group">
                                        <label class="small font-weight-bold text-gray-600">Sumber Dana</label>
                                        <input type="text" name="sumber_dana" id="edit_sumber" class="form-control" style="border-radius: 10px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                             <div class="form-group px-2">
                                <label class="small font-weight-bold text-gray-600">Keterangan Tambahan</label>
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
            const nama = $(this).data('nama');
            const spek = $(this).data('spek');
            const lokasi = $(this).data('lokasi');
            const kondisi = $(this).data('kondisi');
            const jumlah = $(this).data('jumlah');
            const sumber = $(this).data('sumber');
            const jenis = $(this).data('jenis');
            const ket = $(this).data('ket');

            $('#edit_id').val(id);
            $('#edit_nama').val(nama);
            $('#edit_spek').val(spek);
            $('#edit_lokasi').val(lokasi);
            $('#edit_kondisi').val(kondisi);
            $('#edit_jumlah').val(jumlah);
            $('#edit_sumber').val(sumber);
            $('#edit_jenis').val(jenis);
            $('#edit_ket').val(ket);
        });
    });
</script>