
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
                <thead class="text-uppercase">
                    <tr>
                        <th>Tanggal</th>
                        <th>Merk Perlengkapan</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                       <th>total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <form action="<?= base_url('Profil/pesanan') ?>" method="POST" enctype="multipart/form-data">
                        <?php
                        function rupiah($angka)
                        {
                            $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                            return $hasil_rupiah;
                        }
                        $i = 1;
                        $total_bayar = 0;
                        $total_p = 0; ?>
                        <?php foreach ($keranjang as $us) :
                            $total_bayar += $us['total'];
                        ?>
                            <tr>
                                <td><?= $us['tanggal']; ?></td>
                                <td><?= $us['merk']; ?></td>
                                <td><?= $us['harga']; ?></td>
                                <td><?= $us['jumlah']; ?></td>
                                <td><?= $us['total']; ?></td>
                                <td><a href="<?= base_url('Profil/delKeranjang/') . $us['id'] ?>" class="btn btn-danger btn-xs"><i class="mdi mdi-close"></a></td>
                            </tr>
                            <input type="hidden" name="sportstuff[]" value="<?= $us['id_sportstuff']; ?>" />
                            <input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>" />
                            
                            <input type="hidden" name="harga" value="<?= $us['harga']; ?>" />
                            <input type="hidden" name="jumlah_p[]" value="<?= $us['jumlah']; ?>" />
                            <input type="hidden" name="total_p[]" value="<?= $us['total']; ?>" />
                            <?php $i++; ?>
                        <?php endforeach; ?>
                        <tr>
                            <td>Alamat Pengiriman</td>
                            <td colspan="5"><input name="alamat" type="text" class="form-control" id="alamat"></td>
                        </tr>
                        <tr>
                            <td>Pembayaran</td>
                            <td colspan="5">
                                <select name="pembayaran" id="pembayaran" class="form-control">
                                    <option value="">Pilih Bank</option>
                                    <option value="BRI">BRI - 1111-11111-11111-11111</option>
                                    <option value="MANDIRI">MANDIRI - 2222-2222-2222</option>
                                    <option value="BNI">BNI - 3333-3333-3333</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Bukti Transfer</td>
                            <td colspan="5">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input form-control" name="gambar" id="gambar" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td colspan="5"><input name="keterangan" type="text" class="form-control" id="keterangan"></td>
                        </tr>
                        <tr>
                            <td colspan="4" align="right"><strong>Total: </strong></td>
                            <td><?= rupiah($total_bayar); ?></td>
                            <td>
                                <input type="hidden" name="no_penjualan" value="PJ<?= time() ?>" readonly class="form-control" />
                                <input type="hidden" name="bayar" value="<?= $total_bayar; ?>" />
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Pesan</button>
                            </td>
                        </tr>
                    </form>
                </tbody>
            </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
