<?php 

require 'function.php';

if(!isset($_GET['id'])){
  header("location : index.php");
  exit;
}

$id = $_GET['id'];
$daftar_mobil = query("SELECT * FROM daftar_mobil WHERE id=$id");
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


<div class="detailmobil">
  <h1>
  Detail Mobil
  </h1><hr>
  <ul class="list-group w-50">
  <li class="list-group-item"><img src="image/<?= $daftar_mobil['foto_mobil'] ?>" alt=""></li>
    <li class="list-group-item ">Nama Mobil : <?= $daftar_mobil['nama_mobil'] ?></li>
    <li class="list-group-item ">Tahun Mobil : <?= $daftar_mobil['tahun_mobil'] ?></li>
    <li class="list-group-item">Jenis Transmisi : <?= $daftar_mobil['jenis_transmisi'] ?></li>
    <li class="list-group-item">Bahan Bakar : <?= $daftar_mobil['jenis_bahanbakar'] ?></li>
    <li class="list-group-item">Jumlah Tempat Duduk : <?= $daftar_mobil['tempat_duduk'] ?></li>
    <li class="list-group-item">Kapasitas Mesin : <?= $daftar_mobil['kapasitas_mesin'] ?></li>
    <li class="list-group-item">Harga : <?= $daftar_mobil['harga'] ?></li>
    <li class="list-group-item">
        <a href="edit.php?id=<?= $daftar_mobil['id'] ?>" class="btn btn-warning" role="button">Edit</a> 
      <a href="hapus2.php?id=<?= $daftar_mobil['id'] ?>"  onclick="return confirm('apakah anda akan menghapus data ini ?')" class="btn btn-danger" role="button">Hapus</a> 
      <a href="data_mobil.php" class="btn btn-primary" role="button">Kembali</a>
      
  </li>
  </ul>
</div>
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