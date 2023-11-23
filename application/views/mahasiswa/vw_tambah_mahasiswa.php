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
                                                 Form Tambah Data Mahasiswa
                                          </div>
                                          <div class="card-body">
                                                 <form action="" method="POST">
                                                        <div class="form-group">
                                                               <label for="nama">Nama</label>
                                                               <input type="text" name="nama" class="form-control" value="<?= set_value('nama') ?>" id="nama" placeholder="Nama">
                                                               <?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                               <label for="nim">NIM</label>
                                                               <input type="text" name="nim" class="form-control" value="<?= set_value('nim') ?>" id="nim" placeholder="NIM">
                                                               <?= form_error('nim', '<small class="text-danger p1-3">', '</small>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                               <label for="jenis kelamin">Jenis Kelamin</label>
                                                               <select name="jenis kelamin" value="<?= set_value('jenis_kelamin') ?>" id="jenis kelamin" class="form-control">
                                                                      <option values="">
                                                                             Jenis Kelamin</option>
                                                                      <option value="Laki-laki">Laki-laki</option>
                                                                      <option value="Perempuan">Perempuan</option>
                                                               </select>
                                                               <?= form_error('jenis_kelamin', '<small class="text-danger p1-3">', '</small>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                               <label for="email">Email</label>
                                                               <input type="text" name="email" class="form-control" value="<?= set_value('email') ?>" id="email" placeholder="Email">
                                                               <?= form_error('email', '<small class="text-danger p1-3">', '</small>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                               <label for="prodi">Prodi</label>
                                                               <select name="prodi" value="<?= set_value('prodi') ?>" id="prodi" class="form-control">
                                                                      <option value="">Pilih Prodi</option>
                                                                      <?php foreach ($prodi as $p) : ?>
                                                                             <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                                                                      <?php endforeach; ?>
                                                               </select>
                                                               <?= form_error('prodi', '<small class="text-danger p1-3">', '</small>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                               <label for="asal sekolah">Asal Sekolah</label>
                                                               <input type="text" name="asal_sekolah" class="form-control" value="<?= set_value('asal_sekolah') ?>" id="asal_sekolah" placeholder="Asal Sekolah">
                                                               <?= form_error('asal_sekolah', '<small class="text-danger p1-3">', '</small>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                               <label for="no_hp">No
                                                                      HP</label>
                                                               <input type="text" name="no_hp" class="form-control" value="<?= set_value('no_hp') ?>" id="asal_sekolah" placeholder="No HP">
                                                               <?= form_error('no_hp', '<small class="text-danger p1-3">', '</small>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                               <label for="alamat">Alamat</label>
                                                               <input type="text" name="alamat" class="form-control" value="<?= set_value('alamat') ?>" id="alamat" placeholder="Alamat">
                                                               <?= form_error('alamat', '<small class="text-danger p1-3">', '</small>'); ?>
                                                        </div>
                                                        <div class="mt-3">
                                                               <a href="<? base_url('mahasiswa') ?>" class="btn btn-danger">Tutup
                                                               </a>
                                                               <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                                                                      Mahasiswa
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