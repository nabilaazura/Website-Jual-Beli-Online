<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<?= $this->session->flashdata('message'); ?>
	<div class="row">
		<div class="col-xl-12 col-md-12 mb-6">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col-auto">
							<img src="<?= base_url('assets/img/sportstuff/') . $sportstuff['gambar']; ?>" style="width:400px" class="img-thumbnail">
						</div>
						<div class="col mr-2">
							<div class="card-body">
								<form action="" method="POST">
									<input type="hidden" name="id" value="<?= $sportstuff['id']; ?>">
									<input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
									<input type="hidden" name="stok" value="<?= $sportstuff['stok'] ?>">
									<div class="form-group">
										<label for="nama">Merk Sportstuff</label>
										<input name="nama" type="text" value="<?= $sportstuff['merk']; ?>" readonly class="form-control" id="nama">
									</div>
									<div class="form-group">
										<label for="jenis">Jenis</label>
										<input name="jenis" value="<?= $sportstuff['jenis']; ?>" type="text" readonly class="form-control" id="jenis">
									</div>
									<div class="form-group">
										<label for="stok">Stok</label>
										<input name="stok" value="<?= $sportstuff['stok']; ?>" type="text" readonly class="form-control" id="pengarang">
									</div>
									<div class="form-group">
										<label for="harga">Harga</label>
										<input name="harga" value="<?= $sportstuff['harga']; ?>" type="text" readonly class="form-control" id="harga">
									</div>
									<div class="form-group">
										<label for="jumlah">Jumlah</label>
										<input type="number" name="jumlah" id="jumlah" class="form-control" min='1'>
										<?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<!-- <div class="form-group">
										<label for="total">Total Harga</label>
										<input type="text" name="total" id="total" readonly class="form-control">
									</div> -->
									<button type="submit" id="tambah" name="tambah" class="btn btn-primary float-right">Tambah Ke Keranjang</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
