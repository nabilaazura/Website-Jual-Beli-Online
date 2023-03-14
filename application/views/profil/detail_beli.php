
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
                  <table class = "table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Pembelian</th>
                        <th>Tanggal</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>       
                </thead>
                <tbody>
                    <?php $i =1; ?>
                    <?php foreach ($pembelian as $us) : ?>
                        <tr>
                            <td><?=$i; ?>.</td>
                            <td><?=$us['no_penjualan']?></td>
                            <td><?=$us['tanggal']?></td>
                            <td><?=$us['total_bayar']?></td>
                            <td><?=$us['status']?></td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
        </div>
        <form action="" method='POST'>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Pembelian</th>
                            <th>Sportstuff</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                        
                        </tr>       
                    </thead>
                    <tbody>
                        <?php $i =1; ?>
                        <?php foreach ($detailbeli as $us) : ?>
                            <tr>
                                <td><?=$i; ?>.</td>
                                <td><?=$us['no_penjualan']?></td>
                                <td><?=$us['merk']?></td>
                                <td><?=$us['jumlah']?></td>
                                <td><?=$us['total']?></td>
                                
                            </tr>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                <input type="hidden" name="no_penjualan" value="<?= $us['no_penjualan']; ?> ">
                <table class="table">
                    <tr>
                        <td>Apakah Pesanan sudah anda terima?</td>
                        <td>
                            <select name="status" id="status" class="form-control">
                                <option value="">Pilih Status</option>
                                <option value="Sudah">Sudah</option>
                            
                                <option value="Dikirim">Belum</option>
                            </select>
                            <?= form_error('status', '<small class="text-danger pl-3">', '</small>') ?>
                        </td>
                        <td>
                         <button type="submit" class="btn btn-primary float-right"><i class="fa fa-save"></i>&nbsp;&nbsp;Ubah Status</button>      
                        </td>
                    </tr> 
                </table>
            </div>
        </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
