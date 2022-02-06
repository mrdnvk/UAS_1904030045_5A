<?php 
// date_default_timezone_set("Asia/Jakarta");

require 'function.php';

$id = $_GET['id'];
$daftar_mobil = query("SELECT * FROM daftar_mobil WHERE id=$id");

if(isset($_POST['edit'])){
  if (edit($_POST) > 0){
    echo 
    "<script>alert('data mobil berhasil di edit');
    document.location.href = 'index.php';
    </script>";
  }
    else {
    echo 
    "<script>alert('data mobil gagal di edit');
    </script>";
  }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"> <span>Mobil</span>Bekas.com </a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="data_mobil.php">All Vehicles</a>
        <a href="index.php#vehicles">New Vehicles</a>
        <a href="tambah.php">Input Vehicles</a>
        <a href="index.php#reviews">reviews</a>
        <a href="index.php#contact">contact</a>
    </nav>

    <div id="login-btn">
        <button class="btn">login</button>
        <i class="far fa-user"></i>
    </div>

</header> 
    
<div class="login-form-container">

    <span id="close-login-form" class="fas fa-times"></span>

    <form action="">
        <h3>user login</h3>
        <input type="email" placeholder="email" class="box">
        <input type="password" placeholder="password" class="box">
        <p> lupa password <a href="#">Klik disini!</a> </p>
        <input type="submit" value="login" class="btn">
        <p>atau masuk dengan</p>
        <div class="buttons">
            <a href="#" class="btn"> google </a>
            <a href="#" class="btn"> facebook </a>
        </div>
        <p> anda belum mempunyai akun <a href="#">buat sekarang</a> </p>
    </form>

</div>


<section class="edit">
<h1>
 Edit Data Mobil
  </h1><hr>
<div class="editmobil">
  <form method="post" action="" class="form-inline">

  <input type="hidden" class="form-control" value="<?= $daftar_mobil['id']?>" placeholder="Masukkan Nama lengkap" name="id">

  <div class="mb-3">
    <label for="nama_mobil" class="form-label">Nama Mobil : </label><br>
    <input type="text" class="form-control" id="nama_mobil" value="<?= $daftar_mobil['nama_mobil']?>" placeholder="Masukkan Nama Mobil" name="nama_mobil" autofocus required autocomplete="off">
</div>
<div class="mb-3">
    <label for="tahun_mobil" class="form-label">Tahun Mobil : </label> <br>
    <input type="text" class="form-control" id="tahun_mobil" value="<?= $daftar_mobil['tahun_mobil']?>" placeholder="Masukkan tahun mobil" name="tahun_mobil" required autocomplete="off">
</div>
<div class="mb-3">
    <label for="jenis_transmisi" class="form-label">Jenis Transmisi : </label> <br>
    <input type="text" class="form-control" id="jenis_transmisi" value="<?= $daftar_mobil['jenis_transmisi']?>" placeholder="Masukkan Jenis Transmisi" name="jenis_transmisi" required autocomplete="off"> 
</div>
<div class="mb-3">
    <label for="jenis_bahanbakar" class="form-label">Jenis Bahan Bakar : </label> <br>
    <input type="text" class="form-control" id="Jenis_bahanbakar" value="<?= $daftar_mobil['jenis_bahanbakar']?>" placeholder="Masukkan Jenis Bahan Bakar" name="jenis_bahanbakar" required autocomplete="off">
</div>
<div class="mb-3">
    <label for="tempat_duduk" class="form-label">Jumlah Tempat Duduk : </label> <br>
    <input type="text" class="form-control" id="tempat_duduk" value="<?= $daftar_mobil['tempat_duduk']?>" placeholder="Masukkan Jumlah Tempat Duduk" name="tempat_duduk" required autocomplete="off">
</div>
<div class="mb-3">
    <label for="kapasitas_mesin" class="form-label">Kapasitas Mesin : </label> <br>
    <input type="text" class="form-control" id="kapasitas_mesin" value="<?= $daftar_mobil['kapasitas_mesin']?>" placeholder="Masukkan Kapasitas Mesin" name="kapasitas_mesin" required autocomplete="off">
</div>
<div class="mb-3">
    <label for="harga" class="form-label">Harga : </label> <br>
    <input type="text" class="form-control" id="harga" value="<?= $daftar_mobil['harga']?>" placeholder="Masukkan Harga" name="harga" required autocomplete="off">
</div>
<div class="mb-3">
    <label for="foto_mobil" class="form-label">Foto Mobil : </label> <br>
    <input type="text" class="form-control" id="foto_mobil"  value="<?= $daftar_mobil['foto_mobil']?>" placeholder="Masukkan Foto Mobil" name="foto_mobil" required autocomplete="off">
</div>
  <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
</form>
</div>
</section>
<br>

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>our branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> japan </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> france </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> vehicles </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> kevindamara20@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> jakarta, indonesia - 120104 </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

</section>










<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>