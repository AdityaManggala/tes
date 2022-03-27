<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>
    <!-- <nav class="navbar navbar-light">
        <div class="container d-block">
            <a href="index.html"><i class="bi bi-chevron-left"></i></a>
            <a class="navbar-brand ms-4" href="index.html">
                <img src="assets/images/logo/logo.png">
            </a>
        </div>
    </nav> -->


    <div class="container">
        <div class="page-heading">
            <h3>Keranjang</h3>
        </div>
        <div class="page-content">
            <section class="section">
                <div class="row" id="table-hover-row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Item barang </h4>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th class="col-5">Nama barang</th>
                                                <th class="col-2">Qty</th>
                                                <th class="col-2">Harga</th>
                                                <th class="col-3">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($data)) : ?>

                                                <?php foreach ($data as $row) : ?>
                                                    <tr>
                                                        <td class="text-bold-500"><?= $row['kopi_nama'] ?></td>
                                                        <td class="text-bold-500"><?= $row['qty'] ?></td>
                                                        <td class="text-bold-500"><?= $row['kopi_harga'] ?></td>
                                                        <td>
                                                            <a href="index.php?page=pelanggan&aksi=hapusKeranjang&id=<?= $row['kopi_id'] ?>&idtrx=<?= $row['transaksi_id'] ?> " class="btn btn-danger">Hapus</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <div class="alert alert-danger alert-dismissible show fade">
                                                    Data Kosong
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>


                                    <?php if (!empty($data)) : ?>
                                        <div class="alert alert-info">
                                            TOTAL HARGA =
                                            <?php
                                            $harga = 0;
                                            foreach ($data as $row) {
                                                $harga += $row['kopi_harga'] * $row['qty'];
                                            } ?>
                                            <?= formatRupiah($harga) ?>
                                        <?php else : ?>
                                            <!-- <div class="alert alert-danger">
                                                Data Kosong
                                            </div> -->
                                        <?php endif; ?>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <a href="index.php?page=pelanggan&aksi=simpanTransaksi&idtrx=<?= $row['transaksi_id'] ?>" class=" btn btn-primary me-1 mb-1">Simpan Transaksi</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


</body>

</html>