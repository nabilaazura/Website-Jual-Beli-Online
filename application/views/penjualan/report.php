<!DOCTYPE html>
<html Lang="en">

<head>
    <meta cjarset="UTF-8">
    <title><?=$title ?></title>
    <link href="<?= base_url('asset') ?>/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    <div class="row">
        <div class="col text-center">
            <h3 class="h3 text-dark"><?= $title ?></h3>
        </div>
    </div>
    <hr>
    <div class="row">
        <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <td>No Penjualan</td>
                    <td>Nama Pelanggan</td>
                    <td>Tanggal Penjualan</td>
                    <td>Total</td>
                </tr>
                <tbody>
                    <?php foreach ($all_jual as $p) : ?>
                    <tr>
                        <td><?= $p['no_penjualan']?></td>
                        <td><?= $p['nama']?></td>
                        <td><?= $p['tanggal']?></td>
                        <td>Rp<?= number_format($p['total_bayar'], 0, ',','.')?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
        </table>
    </div>
</body>
</html>