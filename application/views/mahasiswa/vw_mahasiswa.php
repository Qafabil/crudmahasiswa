<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800">
                <?php echo $judul; ?>
            </h1>
            <div class="row">
                <div class="col-md-6"><a href="<?php echo base_url('Mahasiswa/tambah') ?>" class=" btn btn-info
                        mb-2">Tambah Mahasiswa</a></div>
            </div>
            <?= $this->session->flashdata('message');?>
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Nim</td>
                        <td>Email</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($mahasiswa as $us): ?>
                        <tr>
                            <td>
                                <?= $i; ?>.
                            </td>
                            <td>
                                <?= $us['nama']; ?>
                            </td>
                            <td>
                                <?= $us['nim']; ?>
                            </td>
                            <td>
                                <?= $us['email']; ?>
                            </td>
                            <td>
                                <a href="<?= base_url('Mahasiswa/hapus/') . $us['id']; ?>" class="btn btn-danger">Hapus</a>
                                <a href="<?= base_url('Mahasiswa/edit/') . $us['id']; ?>" class="btn btn-warning">Edit</a>
                                <a href="<?= base_url('Mahasiswa/detail/') . $us['id']; ?>" class="btn btn-info">Detail</a>
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