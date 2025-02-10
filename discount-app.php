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

    <!-- main page -->
    <main>
        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center text-body-emphasis text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img">
                        <title>Bootstrap</title>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path>
                    </svg>
                    <span class="fs-4">UKK App - Rahmat Setiawan</span>
                </a>
            </header>

            <div class="p-5 mb-4 bg-body-tertiary rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Discount App</h1>
                    <p class="col-md-8 fs-5">
                        Temukan serangkaian aplikasi praktis yang dirancang khusus untuk menguji dan mengasah kompetensi Anda
                        dalam Pengembangan Perangkat Lunak dan Gim. Platform ini menawarkan berbagai fitur,
                        termasuk <strong> Kalkulator Online, Aplikasi To-Do List, Pengelolaan Basis Data, dan Aplikasi Perhitungan Diskon,</strong>
                        yang siap membantu Anda mempersiapkan diri menghadapi uji kompetensi dengan lebih efektif dan efisien.
                        Mari mulai jelajahi dan tingkatkan kemampuan teknis Anda!
                    </p>
                </div>
            </div>

            <!-- form card -->
            <div class="card">
                <h5 class="card-header">Penghitung Diskon</h5>
                <div class="card-body">
                    <!-- form isian -->
                    <form action="" method="post">
                        <div class="form-floating mb-3">
                            <input class="form-control form-control-lg" type="number" name="harga" id="floatingHarga" placeholder="Harga barang (Rp.)">
                            <label for="floatingHarga">Harga barang (Rp.)</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control form-control-lg" type="number" name="diskon" id="floatingDiskon" placeholder="Diskon (%)">
                            <div id="diskonHelp" class="form-text">Masukkan berupa angka tanpa tanda persen. Ex: 40</div>
                            <label for="floatingDiskon">Diskon (%)</label>
                        </div>
                        <div class="mb-">
                            <!-- <input type="submit" class="btn btn-info" value="Hitung"> -->
                            <button type="submit" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Hitung
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
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
                </div>
            </div>


            <footer class="pt-3 mt-4 text-body-secondary">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <div class="col-md-4 d-flex align-items-center">
                        <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                            <svg class="bi" width="30" height="24">
                                <use xlink:href="#bootstrap" />
                            </svg>
                        </a>
                        <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2024 Company, Inc</span>
                    </div>

                    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                        <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#twitter" />
                                </svg></a></li>
                        <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#instagram" />
                                </svg></a></li>
                        <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#facebook" />
                                </svg></a></li>
                    </ul>
                </footer>
            </footer>

        </div>
    </main>


    <!-- js -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>