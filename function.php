<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'uas_1904030045';


$conn = mysqli_connect($host, $user, $pass, $db);
$result = mysqli_query($conn, 'SELECT * FROM daftar_mobil');

function query($query){
    global $conn;

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result)==1){
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}


function simpan($data){
    global $conn;

    $nm=htmlspecialchars($data['nama_mobil']);
    $tm=htmlspecialchars($data['tahun_mobil']);
    $jt=htmlspecialchars($data['jenis_transmisi']);
    $jbb=htmlspecialchars($data['jenis_bahanbakar']);
    $td=htmlspecialchars($data['tempat_duduk']);
    $km=htmlspecialchars($data['kapasitas_mesin']);
    $harga=htmlspecialchars($data['harga']);
    $fm =htmlspecialchars($data['foto_mobil']);

    $query="INSERT INTO daftar_mobil VALUES(null,'$nm','$tm','$jt','$jbb','$td','$km','$harga','$fm');";
    mysqli_query($conn,$query);

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn,"DELETE FROM daftar_mobil WHERE id=$id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function edit($data){
    global $conn;
    
    $id=$data['id'];
    $nm=htmlspecialchars($data['nama_mobil']);
    $tm=htmlspecialchars($data['tahun_mobil']);
    $jt=htmlspecialchars($data['jenis_transmisi']);
    $jbb=htmlspecialchars($data['jenis_bahanbakar']);
    $td=htmlspecialchars($data['tempat_duduk']);
    $km=htmlspecialchars($data['kapasitas_mesin']);
    $harga=htmlspecialchars($data['harga']);
    $fm =htmlspecialchars($data['foto_mobil']);

    $query="UPDATE daftar_mobil SET 
    nama_mobil ='$nm',
    tahun_mobil ='$tm',
    jenis_transmisi ='$jt',
    jenis_bahanbakar ='$jbb',
    tempat_duduk ='$td',
    kapasitas_mesin ='$km',
    harga ='$harga',
    foto_mobil ='$fm'
     WHERE id=$id;";
     
    mysqli_query($conn,$query);

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}


function cari($keyword){
    global $conn;

    $query = "SELECT * FROM daftar_mobil WHERE nama_mobil LIKE '%$keyword%'";
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}

?>
