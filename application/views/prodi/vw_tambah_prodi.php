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
                            Form Tambah Data Prodi
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="nama">Nama Prodi</label>

                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Prodi">
                                </div>
                                <div class="form-group">
                                    <label for="nim">Ruangan</label>
                                    <input type="text" name="ruangan" class="form-control" id="ruangan" placeholder="Ruangan">
                                </div>
                                <div class="form-group">
                                    <label for="jenis kelamin">Jurusan</label>
                                    <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Jurusan">
                                </div>
                                <div class="form-group">
                                    <label for="akreditasi">Akreditasi</label>
                                    <input type="text" name="akreditasi" class="form-control" id="akreditasi" placeholder="Akreditasi">
                                </div>
                                <div class="form-group">
                                    <label for="prodi">Nama Kaprodi</label>
                                    <input type="text" name="nama_kaprodi" class="form-control" id="nama_kaprodi" placeholder="Nama Kaprodi">
                                </div>
                                <div class="form-group">
                                    <label for="tahun_berdiri">Tahun Berdiri</label>
                                    <input type="text" name="tahun_berdiri" class="form-control" id="tahun_berdiri" placeholder="Tahun Berdiri">
                                </div>
                                <div class="form-group">
                                    <label for="output_lulusan">Output Lulusan</label>
                                    <input type="text" name="output_lulusan" class="form-control" id="output_lulusan" placeholder="Output Lulusan">
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Gambar</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                        <label for="gambar" class="custom-file-label">Choose File</label>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <a href="<? base_url('prodi') ?>" class="btn btn-danger">Tutup
                                    </a>
                                    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                                        Prodi
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