<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800">
                <?php echo $judul; ?>
            </h1>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header justify-content-center">
                            Form Tambah Data Pinjaman
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('Pinjaman/upload') ?>" method="POST">
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK">
                                </div>
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                                </div>
                                <div class="form-group">
                                    <label for="no_telpon">No HP</label>
                                    <input type="text" name="no_telpon" class="form-control" id="no_telpon" placeholder="No HP">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="besar_pinjaman">Besar Pinjaman</label>
                                    <input type="text" name="besar_pinjaman" class="form-control" id="besar_pinjaman" placeholder="Besar Pinjaman">
                                </div>
                                <div class="form-group">
                                    <label for="durasi">Durasi</label>
                                    <input type="date" name="durasi" class="form-control" id="durasi" placeholder="Durasi">
                                </div>
                                <div class="mt-3">
                                    <a href="<? base_url('pinjaman') ?>" class="btn btn-danger">Tutup
                                    </a>
                                    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                                        Pinjaman
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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