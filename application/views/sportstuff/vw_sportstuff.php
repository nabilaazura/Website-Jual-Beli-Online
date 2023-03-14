      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title"><?= $judul; ?></h3>
                  <a href="<?= base_url(); ?>Sportstuff/tambah" class="btn btn-info mb-2">Tambah Sportstuff</a>
                  <?= $this->session->flashdata('message'); ?>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Gambar</th>
                          <th>Merk</th>
                          <th>Jenis</th>
                          <th>Harga</th>
                          <th>Stok</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
					    <?php foreach ($sportstuff as $us) : ?>
                        <tr>
                          <td><?= $i; ?></td>
                          <td><img src="<?= base_url('assets/img/sportstuff/') . $us['gambar']; ?>" style="width:100px; height:100px;" class="img-thumbnail"></td>
                          <td><?= $us['merk']; ?></td>
                          <td><?= $us['jenis']; ?></td>
                          <td><?= $us['harga']; ?></td>
                          <td><?= $us['stok']; ?></td>
                          <td>
                                <a href="<?= base_url('Sportstuff/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
								<a href="<?= base_url('Sportstuff/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                          </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        