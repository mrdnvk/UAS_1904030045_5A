<?php 

require 'function.php';
$daftar_mobil = query("SELECT * FROM daftar_mobil");

if(isset($_POST['cari'])){
    $daftar_mobil = cari($_POST['keyword']);
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
<div class="judul">
    <h1>Daftar Mobil</h1>
    <hr>
</div>
<div class="cari">
<form action="" method="POST">
  <input type="text" name="keyword" id="keyword" placeholder="masukkan keyword">
  <button type="submit" class="btn btn-primary" name="cari">CARI</button>
  </form>
  </div>
 <br>

<section class="tabel_mobil" id="tabel_mobil">
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Mobil</th>
      <th scope="col">Foto Mobil</th>
      <th scope="col">Opsi</th>

    </tr>
  </thead>
  <?php if(empty($daftar_mobil)): ?>
      <tr>
        <td colspan="4" class="alert " role="alert">
          <p> <b>Mobil tidak ditemukan </b></p>
        </td>
      </tr>
      <?php endif; ?>

  <tbody>
  <?php $no= 1; ?>
      <?php foreach ( $daftar_mobil as $dm ):?>
     
      <tr>
        <th scope="row"> <?php  echo $no; ?></th>
        <td><?php echo $dm['nama_mobil'] ?></td>
        <td><img src="image/<?php echo $dm['foto_mobil']; ?>" alt=""></td>
        <td><a href="detail.php?id=<?= $dm['id'] ?>" class="btn btn-warning" role="button">Detail</a></td>
      </tr>
      <?php $no++ ?>
      <?php endforeach ?>
   
  </tbody>
</table>
</section>

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