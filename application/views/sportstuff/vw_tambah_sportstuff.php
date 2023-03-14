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
						<div class="form-group">
							<label for="merk">Merk</label>
							<input name="merk" type="text" value="<?= set_value('merk'); ?>" class="form-control" id="merk" placeholder="Merk">
							<?= form_error('merk', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="jenis">Jenis</label>
							<input name="jenis" type="text" value="<?= set_value('jenis'); ?>" class="form-control" id="jenis" placeholder="Jenis">
							<?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="harga">Harga</label>
							<input name="harga" value="<?= set_value('harga'); ?>" type="text" class="form-control" id="harga" placeholder="Harga">
							<?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
                        <div class="form-group">
							<label for="stok">Stok</label>
							<input name="stok" value="<?= set_value('stok'); ?>" type="text" class="form-control" id="stok" placeholder="Stok">
							<?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="kompetensi">Gambar</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input form-control" name="gambar" id="gambar">
							</div>
						</div>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Sportstuff</button>
					</form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
	</div>
        <!-- content-wrapper ends -->
        