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
                        <a class="nav-link dropdown-toggle " id="navbarDropdown" href="hp.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">HP</a>
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
                        <a class="nav-link dropdown-toggle active fw-bold" id="navbarDropdown" href="pelanggan.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pelanggan</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="pelanggan.php">Data Pelanggan</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item active" href="form-pelanggan.php">Tambah Pelanggan</a></li>
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
                <h1 class="display-4 fw-bolder">Tambah Pelanggan</h1>
                <p class="lead fw-normal text-white-50 mb-0">pelanggan lengkap</p>
            </div>
        </div>
    </header>

    <!-- Section-->
    <section class="py-5">
        <div class="main-1">
            <form name="form" class="container" method="POST" action="proses-pelanggan.php">
                <input type="hidden" name="aksi" value="tambah" />
                <div class="mb-3">
                    <label class="form-label">ID Pelanggan</label>
                    <input type="text" class="form-control" name="id_pelanggan" id="formGroupExampleInput" placeholder="Silahkan isi ID Pelanggan">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">ID HP</label>
                    <input type="text" class="form-control" name="id_hp" id="formGroupExampleInput2" placeholder="Silahkan isi ID HP">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">NIK</label>
                    <input type="text" class="form-control" name="nik" id="formGroupExampleInput2" placeholder="Silahkan isi NIK">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="formGroupExampleInput2" placeholder="Silahkan isi Nama Pelanggan">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="formGroupExampleInput2" placeholder="Silahkan isi Alamat">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">No Whatsapp</label>
                    <input type="text" class="form-control" name="no_hp" id="formGroupExampleInput2" placeholder="Silahkan isi No Whatsapp">
                </div>
                <div class="col-auto">
                    <button type="submit" name="simpan" class="btn btn-primary">Tambah Pelanggan</button>
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