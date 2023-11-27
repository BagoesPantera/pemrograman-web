<?php
include('../../koneksi.php')
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tugas Pantera</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
    <!-- NAV -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Pemrograman Web</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="index.php?page=kategori" class="nav-link">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=produk" class="nav-link">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=pesanan" class="nav-link">Pesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-2">
                <div class="row gap-2 p-2">
                    <a href="index.php?page=kategori" class="btn btn-dark">Kategori</a>
                    <a href="index.php?page=produk" class="btn btn-dark">Produk</a>
                    <a href="index.php?page=pesanan" class="btn btn-dark">Pesanan</a>
                </div>
            </div>
            <div class="col">
                <?php
                    if ( isset($_GET['page'])) {
                        $halaman = $_GET['page'];
                        switch ($halaman) {
                            case 'kategori':
                                include('kategori.php');
                                break;
                            case 'produk':
                                include('produk.php');
                                break;
                            case 'pesanan':
                                include('pesanan.php');
                                break;
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>