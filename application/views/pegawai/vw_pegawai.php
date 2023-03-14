<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title"><?= $judul; ?></h3>
                  <a href="<?= base_url('Pegawai/tambah'); ?>" class="btn btn-outline-warning float-right"><i class="nc-icon nc-simple-add"></i> Tambah Pegawai</a>
                  <?= $this->session->flashdata('message'); ?>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                        <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pegawai as $p) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $p['nama']; ?></td>
                                <td><?= $p['jk']; ?></td>
                                <td><?= $p['alamat']; ?></td>
                                <td><?= $p['nohp']; ?></td>
                                <td>
                                    <a href="<?= base_url('Pegawai/edit/') . $p['id']; ?>" class="badge badge-warning">Edit</a><br />
                                    <a href="<?= base_url('Pegawai/hapus/') . $p['id']; ?>" class="badge badge-danger">Remove</a>
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
        