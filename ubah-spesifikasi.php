<?php
include "client-spesifikasi.php";
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
                        <a class="nav-link dropdown-toggle active fw-bold" id="navbarDropdown" href="spesifikasi.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Spesifikasi</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="spesifikasi.php">Data Spesifikasi</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item active" href="form-spesifikasi.php">Tambah Data</a></li>
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
                    <a class="btn btn-outline-dark" href="transaksi.php">
                        <i class="bi-cart-fill me-1"></i>
                        Transaksi
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </a>
                </form>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-2">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Edit Spesifikasi</h1>
                <p class="lead fw-normal text-white-50 mb-0">spesifikasi lengkap</p>
            </div>
        </div>
    </header>

    <!-- Section-->
    <section class="py-5">
        <div class="main-1">
            <?php
            $r = $abc->tampil_spesifikasi($_GET['id_spesifikasi']);
            ?>
            <form name="form" class="container" method="POST" action="proses-spesifikasi.php">
                <input type="hidden" name="aksi" value="ubah" />
                <input type="hidden" name="id_spesifikasi" value="<?= $r->id_spesifikasi ?>" />
                <div class="mb-3">
                    <label class="form-label">ID Spesifikasi</label>
                    <input type="text" class="form-control" name="id_spesifikasi" id="formGroupExampleInput" value="<?= $r->id_spesifikasi ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">RAM/ROM</label>
                    <input type="text" class="form-control" name="ram_rom" id="formGroupExampleInput2" value="<?= $r->ram_rom ?>">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">OS</label>
                    <input type="text" class="form-control" name="os" id="formGroupExampleInput2" value="<?= $r->os ?>">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Baterai</label>
                    <input type="text" class="form-control" name="baterai" id="formGroupExampleInput2" value="<?= $r->baterai ?>">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Resolusi</label>
                    <input type="text" class="form-control" name="resolusi" id="formGroupExampleInput2" value="<?= $r->resolusi ?>">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Kamera</label>
                    <input type="text" class="form-control" name="kamera" id="formGroupExampleInput2" value="<?= $r->kamera ?>">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Jaringan</label>
                    <input type="text" class="form-control" name="jaringan" id="formGroupExampleInput2" value="<?= $r->jaringan ?>">
                </div>
                <div class="col-auto">
                    <button type="submit" name="ubah" class="btn btn-primary">Edit Spesifikasi</button>
                </div>
            </form>
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