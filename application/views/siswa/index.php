<div class="container mt-4">
    <?php if ($this->session->flashdata("flash")) : ?>
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data siswa <strong>berhasil</strong> <?= $this->session->flashdata("flash"); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-6 mb-3">
            <a href="<?= base_url(); ?>siswa/tambah" class="btn btn-primary">Tambah Data Siswa</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h3 class="mb-3">Daftar Siswa</h3>
            <ul class="list-group">
                <?php foreach ($siswa as $sw) : ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <?= $sw["nama"]; ?>
                        <div class="badge-list">
                            <a href="<?= base_url(); ?>siswa/detail/<?= $sw["id"]; ?>" class="badge badge-primary">Detail</a>
                            <a href="<?= base_url(); ?>siswa/ubah/<?= $sw["id"]; ?>" class="badge badge-success">Edit</a>
                            <a href="<?= base_url(); ?>siswa/hapus/<?= $sw["id"]; ?>" class="badge badge-danger" onclick="return confirm('Yakin?');">Delete</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>