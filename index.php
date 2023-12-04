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
        h1 {
    font-family: Algerian, sans-serif;
}
    </style>

</head>

<body>
    <?= require_once 'navbar.php' ?>
    <h1 style="color: blue;">Kelompok 6</h1>
    <!-- Isi konten halaman Anda di sini -->
    <div class="" style="margin-top: 200px ;">
        <div class="wrapper">
            <img src="img/fotbar3.jpg" width="400" height="320" alt="">
            <img src="img/fotbar.jpg" width="400" height="320" alt="">
            <img src="img/fotbar6.jpg" width="400" height="320" alt="">
            <img src="img/fotbar4.jpg" width="400" height="320" alt="">
            <img src="img/fotbar1.jpg" width="400" height="320" alt="">
            <img src="img/fotbar2.jpg" width="400" height="320" alt="">
            <img src="img/pp.jpg" width="400" height="320" alt="">
        </div>
    </div>

    <!-- Tambahkan script jQuery dan Bootstrap JS untuk mengaktifkan efek aktif pada navbar -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
    <?= require_once 'footer.php' ?>
</body>

</html>