<?php
include "client-transaksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Toko Handphone</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-light" id="navigasi">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">Toko Handphone</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="hp.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">HP</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="hp.php">Data HP</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="form-hp.php">Tambah HP</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="spesifikasi.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Spesifikasi</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="spesifikasi.php">Data Spesifikasi</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="form-spesifikasi.php">Tambah Spesifikasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="pelanggan.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pelanggan</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="pelanggan.php">Data Pelanggan</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="form-pelanggan.php">Tambah Pelanggan</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <a class="btn btn-primary active fw-bold" href="transaksi.php">
                        <i class="bi-cart-fill me-1"></i>
                        Transaksi
                        <span class="badge bg-primary text-white ms-1 rounded-pill">0</span>
                    </a>
                </form>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-2">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Transaksi</h1>
                <p class="lead fw-normal text-white-50 mb-0">data transaksi</p>
            </div>
        </div>
    </header>

    <!-- Section-->
    <section class="py-5">
        <div class="main-1">
            <div class="container">
                <div class="table-responsive-lg">
                    <table class="table caption-top">
                        <caption class="text-center">Daftar Transaksi</caption>
                        <thead class="table-dark text-center">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">ID Transaksi</th>
                                <th scope="col">ID Pelanggan</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-border text-center align-middle text-wrap">
                            <?php $no = 1;
                            $data_array = $abc->tampil_semua_transaksi();
                            foreach ($data_array as $r) {
                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $r->id_transaksi ?></td>
                                    <td><?= $r->id_pelanggan ?></td>
                                    <td><?= $r->tanggal ?></td>
                                    <td><?= $r->jumlah ?></td>
                                    <td>
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <a class="btn btn-outline-primary btn-sm" type="button" a href="ubah-transaksi.php?id_transaksi=<?= $r->id_transaksi ?>">Ubah</a>
                                            <a class="btn btn-outline-danger btn-sm" type="button" a href="proses-transaksi.php?aksi=hapus&id_transaksi=<?= $r->id_transaksi ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini?')">Hapus</a>
                                        </div>
                                    </td>

                                </tr>
                            <?php $no++;
                            }
                            unset($data_array, $r, $no);
                            ?>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <a class="btn btn-success btn-lg" type="button" a href="form-transaksi.php">Tambah Transaksi</a>
                    </div>


                </div>
            </div>
        </div>

    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; M. Rizky Baskara - Naufal Bakhtiar Ismail 2022</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>