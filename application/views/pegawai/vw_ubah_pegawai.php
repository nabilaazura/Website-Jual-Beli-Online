<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title"><?= $judul; ?></h3>
                  <?= $this->session->flashdata('message'); ?>
                  <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $pegawai['id']; ?>">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" value="<?= $pegawai['nama']; ?>" class="form-control" id="nama" placeholder="Nama Pegawai" />
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin Kelamin</label>
                    <select id="jk" name="jk" class="form-control">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Pria" <?php if ($pegawai['jk'] == 'Pria') {
                                                    echo "selected";
                                                } ?>>Pria</option>
                        <option value="Wanita" <?php if ($pegawai['jk'] == 'Wanita') {
                                                    echo "selected";
                                                } ?>>Wanita</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" value="<?= $pegawai['alamat']; ?>" class="form-control" id="alamat" placeholder="Alamat lengkap">
                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="nohp">No HP</label>
                    <input type="text" name="nohp" value="<?= $pegawai['nohp']; ?>" class="form-control" id="nohp" placeholder="No HP">
                    <?= form_error('nohp', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <a href="<?= base_url('Pegawai') ?>" class="btn btn-danger">Tutup</a>
                <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Pegawai</button>
            </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
	</div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        