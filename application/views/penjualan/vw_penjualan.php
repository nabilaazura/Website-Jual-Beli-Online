<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <div class="row align-items-center">
                <div class="col-md-6 col-8 align-self-center">
                    <h2 class="page-title mb-3 p-0"><?= $judul; ?></h2>
                    <?= $this->session->flashdata('message'); ?>
                </div>
                <div class="float-right">
                    <a href ="<?= base_url('Penjualan/export') ?> " class="btn btn-secondary btn-sn"><i class="fa fa-file-pdf"></i>&nbsp;&nbsp;Export</a>
                </div>
            </div>
                  <div class="table-responsive">
                  <table class="table">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>No Penjualan</td>
                                            <td>Tanggal</td>
                                            <td>Pelanggan</td>
                                            <td>Total</td>
                                            <td>Status</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($penjualan as $us) : ?>
                                            <tr>
                                                <td><?= $i; ?>.</td>
                                                <td><?= $us['no_penjualan']; ?></td>
                                                <td><?= $us['tanggal']; ?></td>
                                                <td><?= $us['nama']; ?></td>
                                                <td><?= $us['total_bayar']; ?></td>
                                                <td><?= $us['status']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('Penjualan/detail/') . $us['no_penjualan']; ?>" class="btn btn-info btn-xs text-white">Detail</a>
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
        