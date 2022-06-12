<?php
require 'functions.php';
//cek apakah tombol submit sudah ditekan
if(isset($_POST["submit"]) ){
    
    //cek apakah data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0){
        echo "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href='index.php'
        </script>";
    }else{
        echo "<script>
            alert('Data Gagal Ditambahkan');
            document.location.href='index.php'
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4d1154c754.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/styletambah.css">
    <title>Input Data</title>
</head>
<body>
    <a href="index.php"><button class="back"><i class="fa fa-arrow-left-long"></i></button></a>
    <h2>INPUT DATA MAHASISWA</h2>
    <form action="" method="post">
    <div class="container">
  <form action="/action_page.php">
    <div class="baris">
      <div class="kolom1">
        <label for="nama">Nama</label>
      </div>
      <div class="kolom2">
        <input type="text" id="nama" name="nama">
      </div>
    </div>

    <div class="baris">
      <div class="kolom1">
        <label for="npm">NPM</label>
      </div>
      <div class="kolom2">
        <input type="text" id="npm" name="npm">
      </div>
    </div>

    <div class="baris">
      <div class="kolom1">
        <label for="jenis_kelamin">Jenis Kelamin</label>
      </div>
      <div class="kolom2">
        <input type="text" id="jenis_kelamin" name="jenis_kelamin">
      </div>
    </div>

    <div class="baris">
      <div class="kolom1">
        <label for="no_telp">No Telepon</label>
      </div>
      <div class="kolom2">
        <input type="text" id="no_telp" name="no_telp">
      </div>
    </div>

    <div class="baris">
      <div class="kolom1">
        <label for="alamat">Alamat</label>
      </div>
      <div class="kolom2">
        <input type="text" id="alamat" name="alamat">
      </div>
    </div>

    <div class="baris">
      <div class="kolom1">
        <label for="semester">Semester</label>
      </div>
      <div class="kolom2">
        <input type="text" id="semester" name="semester">
      </div>
    </div>

    <div class="baris">
      <div class="kolom1">
        <label for="jurusan">Jurusan</label>
      </div>
      <div class="kolom2">
        <input type="text" id="jurusan" name="jurusan">
      </div>
    </div>

    <div class="baris">
      <div class="kolom1">
        <label for="fakultas">Fakultas</label>
      </div>
      <div class="kolom2">
        <input type="text" id="fakultas" name="fakultas">
      </div>
    </div>
    <input type="submit" name="submit" value="SUBMIT">
  </form>
</div>
</form>
</body>
</html>