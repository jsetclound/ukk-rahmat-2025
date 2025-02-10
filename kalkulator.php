<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <h1>Aplikasi penghitung diskon</h1>

    <!-- bagian form -->
    <form action="" method="post">
        <label for="">Harga barang (Rp.)</label>
        <input type="number" name="harga" id="">

        <label for="">Diskon (%)</label>
        <input type="number" name="diskon" id="">

        <input type="submit" value="Hitung">
    </form>

    <!-- bagian PHP -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // menangkap isian dari form
        $harga = $_POST['harga'];
        $diskon = $_POST['diskon'];

        // hitung diskon
        $nilai_diskon = ($diskon / 100) * $harga;
        $harga_setelah_diskon = $harga - $nilai_diskon;

        //tampilkan hasil
        echo "<h2> Hasil perhitungan diskon </h2>";
        echo "<p> Harga asli Rp." . $harga . "</p>";
        echo "<p> Diskon (%) ." . $diskon . "</p>";
        echo "<p> Nilia potongan diskon Rp." . $nilai_diskon . "</p>";
        echo "<p> Harga setelah diskon Rp." . $harga_setelah_diskon . "</p>";
    }
    ?>

    <!-- js -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>