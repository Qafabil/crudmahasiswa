<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800">
                <?php echo $judul; ?>
            </h1>
            <div class="row">
                <div class="col-md-6"><a href="<?php echo base_url('Pinjaman/tambah') ?>" class=" btn btn-info
                        mb-2">Tambah Pinjaman</a></div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>NIK</td>
                        <td>Email</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pinjaman as $us) : ?>
                        <tr>
                            <td>
                                <?= $i; ?>.
                            </td>
                            <td>
                                <?= $us['nama_lengkap']; ?>
                            </td>
                            <td>
                                <?= $us['nik']; ?>
                            </td>
                            <td>
                                <?= $us['email']; ?>
                            </td>
                            <td>
                                <a href="<?= base_url('Pinjaman/hapus/') . $us['id']; ?>" class="btn btn-danger">Hapus</a>
                                <a href="<?= base_url('Pinjaman/edit/') . $us['id']; ?>" class="btn btn-warning">Edit</a>
                                <a href="<?= base_url('Pinjaman/detail/') . $us['id']; ?>" class="btn btn-info">Detail</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2023</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>