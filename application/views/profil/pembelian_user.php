<!-- partial -->
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title"><?= $judul; ?></h3>
                  <?= $this->session->flashdata('message'); ?>
                  <div class="table-responsive">
                  <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Pembelian</th>
                                            <th>Tanggal</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($pembelian as $us) : ?>
                                            <tr>
                                                <td><?= $i; ?>.</td>
                                                <td><?= $us['no_penjualan']; ?></td>
                                                <td><?= $us['tanggal']; ?></td>
                                                <td><?= $us['total_bayar']; ?></td>
                                                <td><?= $us['status']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('Profil/statusbeli/') . $us['no_penjualan']; ?>" class="btn btn-warning">Detail</a>
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
