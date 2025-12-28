<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-white font-weight-bold" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Data Suplier</h1>
            <p class="mb-0 text-white-50">Manajemen data mitra dan penyedia barang</p>
        </div>
        <button class="btn btn-light text-primary font-weight-bold shadow-sm" data-toggle="modal" data-target="#tambahSuplierModal" style="border-radius: 30px; padding: 10px 25px;">
            <i class="fas fa-plus mr-2"></i> Tambah Suplier
        </button>
    </div>

    <div class="card border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;">
        <div class="card-header bg-white py-3 border-0">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Mitra Suplier</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" width="100%" cellspacing="0">
                    <thead style="background-color: #f8f9fc; color: #858796;">
                        <tr style="text-transform: uppercase; font-size: 0.8rem;">
                            <th class="border-0 rounded-left pl-4" width="10%">No</th>
                            <th class="border-0" width="30%">Nama Suplier</th>
                            <th class="border-0" width="40%">Alamat Lengkap</th>
                            <th class="border-0 rounded-right text-center" width="20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($suplier as $s) : ?>
                        <tr>
                            <td class="pl-4 align-middle font-weight-bold text-gray-800"><?= $no++ ?></td>
                            <td class="align-middle">
                                <div class="font-weight-bold text-primary"><?= $s->nama_suplier ?></div>
                                <small class="text-muted">ID: #<?= $s->id_suplier ?></small>
                            </td>
                            <td class="align-middle text-gray-600">
                                <i class="fas fa-map-marker-alt text-gray-400 mr-2"></i>
                                <?= $s->alamat ? $s->alamat : '-' ?>
                            </td>
                            <td class="align-middle text-center">
                                <button class="btn btn-light text-warning btn-sm btn-edit-sup shadow-sm" 
                                    style="border-radius: 10px;"
                                    data-id="<?= $s->id_suplier ?>" 
                                    data-nama="<?= $s->nama_suplier ?>"
                                    data-alamat="<?= $s->alamat ?>"
                                    data-toggle="modal" data-target="#editSuplierModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <a href="<?= base_url('suplier/hapus/' . $s->id_suplier) ?>" 
                                   class="btn btn-light text-danger btn-sm shadow-sm ml-2" 
                                   style="border-radius: 10px;"
                                   onclick="return confirm('Yakin ingin menghapus data suplier ini?')">
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

<div class="modal fade" id="tambahSuplierModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0" style="border-radius: 20px;">
            <div class="modal-header bg-primary text-white" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
                <h5 class="modal-title font-weight-bold">Tambah Suplier Baru</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('suplier/tambah_aksi') ?>" method="post">
                <div class="modal-body bg-light">
                    <div class="card shadow-sm border-0" style="border-radius: 15px;">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="small font-weight-bold text-gray-600">Nama Perusahaan / Suplier</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text border-0 bg-light"><i class="fas fa-building text-primary"></i></span>
                                    </div>
                                    <input type="text" name="nama_suplier" class="form-control border-0 bg-light" placeholder="Masukkan nama suplier..." required>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <label class="small font-weight-bold text-gray-600">Alamat Kantor</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text border-0 bg-light"><i class="fas fa-map text-primary"></i></span>
                                    </div>
                                    <textarea name="alamat" class="form-control border-0 bg-light" rows="3" placeholder="Masukkan alamat lengkap..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light border-0">
                    <button type="button" class="btn btn-secondary shadow-sm" data-dismiss="modal" style="border-radius: 10px;">Batal</button>
                    <button type="submit" class="btn btn-primary shadow-sm px-4" style="border-radius: 10px;">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editSuplierModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0" style="border-radius: 20px;">
            <div class="modal-header bg-warning text-white" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
                <h5 class="modal-title font-weight-bold">Edit Data Suplier</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('suplier/update_aksi') ?>" method="post">
                <div class="modal-body bg-light">
                    <input type="hidden" name="id_suplier" id="sup_id">
                    <div class="card shadow-sm border-0" style="border-radius: 15px;">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="small font-weight-bold text-gray-600">Nama Perusahaan / Suplier</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text border-0 bg-light"><i class="fas fa-building text-warning"></i></span>
                                    </div>
                                    <input type="text" name="nama_suplier" id="sup_nama" class="form-control border-0 bg-light" required>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <label class="small font-weight-bold text-gray-600">Alamat Kantor</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text border-0 bg-light"><i class="fas fa-map text-warning"></i></span>
                                    </div>
                                    <textarea name="alamat" id="sup_alamat" class="form-control border-0 bg-light" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light border-0">
                    <button type="button" class="btn btn-secondary shadow-sm" data-dismiss="modal" style="border-radius: 10px;">Batal</button>
                    <button type="submit" class="btn btn-warning shadow-sm px-4 text-white" style="border-radius: 10px;">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script>
    $(document).ready(function() {
        $('.btn-edit-sup').on('click', function() {
            const id = $(this).data('id');
            const nama = $(this).data('nama');
            const alamat = $(this).data('alamat');

            $('#sup_id').val(id);
            $('#sup_nama').val(nama);
            $('#sup_alamat').val(alamat);
        });
    });
</script>