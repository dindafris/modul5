<?php
require 'functions.php';

//ambil data di url
$id= $_GET["id"];

//query data mahasiswa berdasar id
$mhs= query("SELECT * FROM mahasiswa WHERE id = '$id' ")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4d1154c754.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/styletambah.css">
    <title>Detail Data</title>
</head>
<body>
    <a href="index.php"><button class="back"><i class="fa fa-arrow-left-long"></i></button></a>
    <h2>DETAIL DATA MAHASISWA</h2>
    <form action="" method="post">
    <div class="container">
  <form action="" method="post">
  <input type="hidden" name="id" id="id" value=" <?= $mhs["id"]; ?> " >
    <div class="baris">
      <div class="kolom1">
        <label for="nama">Nama</label>
      </div>
      <div class="kolom2">
      <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>" disabled>
      </div>
    </div>

    <div class="baris">
      <div class="kolom1">
        <label for="npm">NPM</label>
      </div>
      <div class="kolom2">
      <input type="text" name="npm" id="npm" required value="<?= $mhs["npm"]; ?>" disabled>
      </div>
    </div>

    <div class="baris">
      <div class="kolom1">
        <label for="jenis_kelamin">Jenis Kelamin</label>
      </div>
      <div class="kolom2">
      <input type="text" name="jenis_kelamin" id="jenis_kelamin" required value="<?= $mhs["jenis_kelamin"]; ?>" disabled>
      </div>
    </div>

    <div class="baris">
      <div class="kolom1">
        <label for="no_telp">No Telepon</label>
      </div>
      <div class="kolom2">
      <input type="text" name="no_telp" id="no_telp" required value="<?= $mhs["no_telp"]; ?>" disabled>
      </div>
    </div>

    <div class="baris">
      <div class="kolom1">
        <label for="alamat">Alamat</label>
      </div>
      <div class="kolom2">
      <input type="text" name="alamat" id="alamat" required value="<?= $mhs["alamat"]; ?>" disabled>
      </div>
    </div>

    <div class="baris">
      <div class="kolom1">
        <label for="semester">Semester</label>
      </div>
      <div class="kolom2">
      <input type="text" name="semester" id="semester" required value="<?= $mhs["semester"]; ?>" disabled>
      </div>
    </div>

    <div class="baris">
      <div class="kolom1">
        <label for="jurusan">Jurusan</label>
      </div>
      <div class="kolom2">
      <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>" disabled>
      </div>
    </div>

    <div class="baris">
      <div class="kolom1">
        <label for="fakultas">Fakultas</label>
      </div>
      <div class="kolom2">
      <input type="text" name="fakultas" id="fakultas" required value="<?= $mhs["fakultas"]; ?>" disabled>
      </div>
    </div>
  </form>
</div>
</form>
</body>
</html>