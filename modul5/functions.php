<?php 

$conn= mysqli_connect("localhost", "root", "", "tugasphpcrud");

function query($query){
    global $conn;
    $result= mysqli_query( $conn, $query);
    $rows= [];
    while($row= mysqli_fetch_assoc($result) ){
        $rows[]= $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;

    //ambil data dari tiap elemen
    $nama= htmlspecialchars($data["nama"]);
    $npm= htmlspecialchars($data["npm"]);
    $kelamin= htmlspecialchars($data["jenis_kelamin"]);
    $notelp= htmlspecialchars($data["no_telp"]);
    $alamat= htmlspecialchars($data["alamat"]);
    $semester= htmlspecialchars($data["semester"]);
    $jurusan= htmlspecialchars($data["jurusan"]);
    $fakultas= htmlspecialchars($data["fakultas"]);

    //query insert data
    $query= "INSERT INTO mahasiswa values ('','$nama','$npm','$kelamin','$notelp','$alamat','$semester','$jurusan','$fakultas')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;

    //ambil data dari tiap elemen
    $id= $data["id"];
    $nama= htmlspecialchars($data["nama"]);
    $npm= htmlspecialchars($data["npm"]);
    $kelamin= htmlspecialchars($data["jenis_kelamin"]);
    $notelp= htmlspecialchars($data["no_telp"]);
    $alamat= htmlspecialchars($data["alamat"]);
    $semester= htmlspecialchars($data["semester"]);
    $jurusan= htmlspecialchars($data["jurusan"]);
    $fakultas= htmlspecialchars($data["fakultas"]);

    //query update data
    $query= "UPDATE mahasiswa SET
                nama = '$nama',
                npm = '$npm',
                jenis_kelamin = '$kelamin',
                no_telp = '$notelp',
                alamat = '$alamat',
                semester = '$semester',
                jurusan = '$jurusan',
                fakultas = '$fakultas'
            WHERE id= $id
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE'%$keyword%' OR
                npm LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%' OR
                fakultas LIKE '%$keyword%' ";
    return query($query);
}

?>