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
    <?php if( isset($_POST["cari"]) ) : ?>
        <a href="index.php"><button class="back"><i class="fa fa-arrow-left-long"></i></button></a>
    <?php endif; ?>
    <a href="tambah.php"><button class="tambah"><i class="fa-reguler fa-plus"></i></button></a>
    <div class="searchbar">

    <form action="" method="post">
      <input type="text" name="keyword" id="keyword" placeholder="Cari" name="search">
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
        <?php $no = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['npm'] ?></td>
                <td><?php echo $row['fakultas'] ?></td>
                <td><?php echo $row['jurusan'] ?></td>
                <td class="aksi">
                    <a href="detail.php?id=<?php echo $row['id'] ?>"><button class="btn detail"><i class="fa fa-bars"></i></button></a>
                    <a href="ubah.php?id=<?= $row["id"]; ?>?"></a>
                    <a href="ubah.php?id=<?php echo $row['id'] ?>"><button class="btn edit"><i class="fa fa-pencil"></i></button></a>
                    <a href="hapus.php?id=<?php echo $row['id'] ?>"><button class="btn delete"><i class="fa-regular fa-trash-can"></i></button></a>
                </td>
        </tr>
        <?php endforeach; ?> 


    </tbody>
</table>
</body>
</html>
