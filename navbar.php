<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Responsif Bootstrap 5</title>
    <!-- Tambahkan link ke Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Tambahkan link ke CSS kustom Anda jika diperlukan -->
    <style>
        /* Gaya kustom untuk mengubah warna teks tautan menjadi aqua */
        a {
            color: aqua !important;
        }

        /* Gaya tambahan untuk mengubah tampilan tautan navbar saat dihover */
        .navbar-nav .nav-link:hover {
            color: rgb(1, 187, 249) !important; /* Warna teks saat dihover */
        }

        /* Gaya tambahan untuk mengubah tampilan tautan navbar saat ditekan */
        .navbar-nav .nav-link:active {
            color: white !important; /* Warna teks saat ditekan */
        }

        /* Gaya untuk mengubah tampilan tautan "Home" saat di halaman tersebut */
        .navbar-nav .nav-link.disabled {
            cursor: not-allowed;
            pointer-events: none;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <div class="container justify-content-between">
            <div class="row">
                <a class="navbar-brand" href="crud_uts/index.html">XI PPLG 1</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="row">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto justify-content-between">
                        <li class="nav-item">
                            <?php
                            // Mengecek apakah halaman saat ini adalah "index.php"
                            $currentPage = basename($_SERVER['PHP_SELF']);
                            if ($currentPage === 'index.php') {
                                echo '<a class="nav-link disabled" aria-current="page" href="index.php">Home</a>';
                            } else {
                                echo '<a class="nav-link" href="index.php">Home</a>';
                            }
                            ?>
                        </li>
                        <li class="nav-item">
                        <?php
                            // Mengecek apakah halaman saat ini adalah "index.php"
                            $currentPage = basename($_SERVER['PHP_SELF']);
                            if ($currentPage === 'kegiatanMembatik.php') {
                                echo '<a class="nav-link disabled" href="kegiatanMembatik.php">Kegiatan Batik</a>';
                            } else {
                                echo '<a class="nav-link" href="kegiatanMembatik.php">Kegiatan Batik</a>';
                            }
                            ?>
                            
                        </li>
                        <li class="nav-item">
                        <?php
                            // Mengecek apakah halaman saat ini adalah "index.php"
                            $currentPage = basename($_SERVER['PHP_SELF']);
                            if ($currentPage === 'foto.php') {
                                echo '<a class="nav-link disabled" href="foto.php">Foto</a>';
                            } else {
                                echo '<a class="nav-link" href="foto.php">Foto</a>';
                            }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Isi konten halaman Anda di sini -->
    <div class="wrapper">
        <!-- Konten halaman Anda -->
    </div>

    <!-- Tambahkan script atau Bootstrap JS jika diperlukan -->
</body>
</html>
