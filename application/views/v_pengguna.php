<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-white font-weight-bold" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Data Pengguna</h1>
            <p class="mb-0 text-white-50">Manajemen akses dan hak otorisasi sistem</p>
        </div>
        <button class="btn btn-light text-primary font-weight-bold shadow-sm" data-toggle="modal" data-target="#tambahUserModal" style="border-radius: 30px; padding: 10px 25px;">
            <i class="fas fa-user-plus mr-2"></i> Tambah Pengguna
        </button>
    </div>

    <div class="card border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;">
        <div class="card-header bg-white py-3 border-0">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Akun Pengguna</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" width="100%" cellspacing="0">
                    <thead style="background-color: #f8f9fc; color: #858796;">
                        <tr style="text-transform: uppercase; font-size: 0.8rem;">
                            <th class="border-0 rounded-left pl-4" width="10%">No</th>
                            <th class="border-0" width="40%">Identitas Pengguna</th>
                            <th class="border-0" width="30%">Level Akses</th>
                            <th class="border-0 rounded-right text-center" width="20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($pengguna as $p) : ?>
                        <tr>
                            <td class="pl-4 align-middle font-weight-bold text-gray-800"><?= $no++ ?></td>
                            <td class="align-middle">
                                <div class="d-flex align-items-center">
                                    <div class="btn-circle btn-sm bg-gradient-primary text-white mr-3 shadow-sm d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div>
                                        <div class="font-weight-bold text-primary"><?= $p->nama_pengguna ?></div>
                                        <small class="text-muted">ID: #USER-<?= $p->id_pengguna ?></small>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">
                                <?php if($p->level == 'admin'): ?>
                                    <span class="badge badge-primary px-3 py-2 shadow-sm" style="border-radius: 10px; font-weight: 600;"><i class="fas fa-crown mr-1"></i> Administrator</span>
                                <?php elseif($p->level == 'kepala_gudang'): ?>
                                    <span class="badge badge-info px-3 py-2 shadow-sm" style="border-radius: 10px; font-weight: 600;"><i class="fas fa-warehouse mr-1"></i> Kepala Gudang</span>
                                <?php else: ?>
                                    <span class="badge badge-secondary px-3 py-2 shadow-sm" style="border-radius: 10px; font-weight: 600;"><i class="fas fa-user mr-1"></i> User Biasa</span>
                                <?php endif; ?>
                            </td>
                            <td class="align-middle text-center">
                                <button class="btn btn-light text-warning btn-sm btn-edit-user shadow-sm" 
                                    style="border-radius: 10px;"
                                    data-id="<?= $p->id_pengguna ?>" 
                                    data-nama="<?= $p->nama_pengguna ?>"
                                    data-level="<?= $p->level ?>"
                                    data-toggle="modal" data-target="#editUserModal">
                                    <i class="fas fa-user-edit"></i>
                                </button>
                                <a href="<?= base_url('pengguna/hapus/' . $p->id_pengguna) ?>" 
                                   class="btn btn-light text-danger btn-sm shadow-sm ml-2" 
                                   style="border-radius: 10px;"
                                   onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini? Tindakan ini tidak dapat dibatalkan.')">
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

<div class="modal fade" id="tambahUserModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0" style="border-radius: 20px;">
            <div class="modal-header bg-primary text-white" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
                <h5 class="modal-title font-weight-bold">Tambah Pengguna Baru</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('pengguna/tambah_aksi') ?>" method="post">
                <div class="modal-body bg-light">
                    <div class="card shadow-sm border-0" style="border-radius: 15px;">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="small font-weight-bold text-gray-600">Username / Nama Lengkap</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text border-0 bg-light"><i class="fas fa-user text-primary"></i></span>
                                    </div>
                                    <input type="text" name="nama_pengguna" class="form-control border-0 bg-light" placeholder="Masukkan nama pengguna..." required>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <label class="small font-weight-bold text-gray-600">Level Akses</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text border-0 bg-light"><i class="fas fa-shield-alt text-primary"></i></span>
                                    </div>
                                    <select name="level" class="form-control border-0 bg-light" style="border-radius: 0 10px 10px 0;">
                                        <option value="user">User Biasa</option>
                                        <option value="kepala_gudang">Kepala Gudang</option>
                                        <option value="admin">Administrator</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light border-0">
                    <button type="button" class="btn btn-secondary shadow-sm" data-dismiss="modal" style="border-radius: 10px;">Batal</button>
                    <button type="submit" class="btn btn-primary shadow-sm px-4" style="border-radius: 10px;">Simpan Akun</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0" style="border-radius: 20px;">
            <div class="modal-header bg-warning text-white" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
                <h5 class="modal-title font-weight-bold">Edit Data Pengguna</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('pengguna/update_aksi') ?>" method="post">
                <div class="modal-body bg-light">
                    <input type="hidden" name="id_pengguna" id="user_id">
                    <div class="card shadow-sm border-0" style="border-radius: 15px;">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="small font-weight-bold text-gray-600">Username / Nama Lengkap</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text border-0 bg-light"><i class="fas fa-user text-warning"></i></span>
                                    </div>
                                    <input type="text" name="nama_pengguna" id="user_nama" class="form-control border-0 bg-light" required>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <label class="small font-weight-bold text-gray-600">Level Akses</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text border-0 bg-light"><i class="fas fa-shield-alt text-warning"></i></span>
                                    </div>
                                    <select name="level" id="user_level" class="form-control border-0 bg-light" style="border-radius: 0 10px 10px 0;">
                                        <option value="user">User Biasa</option>
                                        <option value="kepala_gudang">Kepala Gudang</option>
                                        <option value="admin">Administrator</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light border-0">
                    <button type="button" class="btn btn-secondary shadow-sm" data-dismiss="modal" style="border-radius: 10px;">Batal</button>
                    <button type="submit" class="btn btn-warning shadow-sm px-4 text-white" style="border-radius: 10px;">Update Akun</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script>
    $(document).ready(function() {
        $('.btn-edit-user').on('click', function() {
            const id = $(this).data('id');
            const nama = $(this).data('nama');
            const level = $(this).data('level');

            $('#user_id').val(id);
            $('#user_nama').val(nama);
            $('#user_level').val(level);
        });
    });
</script>