<?php

require 'functions.php';
$mahasiswa= query("SELECT * FROM mahasiswa");

//tombol cari diklik mencari
if(isset($_POST["cari"]) ){
    $mahasiswa = cari($_POST["keyword"]);
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

    <link rel="stylesheet" href="css/style.css">
    <title>Modul 5</title>

</head>
<body>
    <a href="tambah.php"><button class="tambah"><i class="fa-reguler fa-plus"></i></button></a>
    <div class="searchbar">

    <form action="" method="post">
      <input type="text" name="keyword" placeholder="Cari" name="search">
      <button type="text" name="cari" class="submit"><i class="fa fa-magnifying-glass"></i></button>
    </form>

  </div>
<table id="tbl">
    <thead>
        <tr>
            <th scope="col" style="border-top-left-radius: 10px;">No</th>
            <th scope="col">Nama</th>
            <th scope="col">NPM</th>
            <th scope="col">Fakultas</th>
            <th scope="col">Jurusan</th>
            <th scope="col" style="border-top-right-radius: 10px;">Opsi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        </tr>
        <?php
        $conn= mysqli_connect("localhost", "root", "", "tugasphpcrud");
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM mahasiswa');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['npm'] ?></td>
                <td><?php echo $data['fakultas'] ?></td>
                <td><?php echo $data['jurusan'] ?></td>
                <td class="aksi">
                    <a href="detail.php?id=<?php echo $data['id'] ?>"><button class="btn detail"><i class="fa fa-bars"></i></button></a>
                    <a href="ubah.php?id=<?= $data["id"]; ?>?"></a>
                    <a href="ubah.php?id=<?php echo $data['id'] ?>"><button class="btn edit"><i class="fa fa-pencil"></i></button></a>
                    <a href="hapus.php?id=<?php echo $data['id'] ?>"><button class="btn delete"><i class="fa-regular fa-trash-can"></i></button></a>
        </td>
        </tr>
                
            
        <?php } ?>


    </tbody>
</table>
</body>
</html>