<?php
require "functions.php";
//ambil data url
$id = $_GET["id"];
//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


//cek tombol sudah ditekan
if(isset($_POST["submit"])){

   //cek berhasil atau tdk
   if(ubah($_POST) > 0){
       echo "
        <script>
        alert('data berhasil diubah!');
        document.location.href = 'index.php'
        </script>
       ";
   }else{
       echo " <script>
       alert('data gagal diubah!');
       document.location.href = 'index.php'
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
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" required value="<?= $mhs["id"];?>">
        <ul>
            <li>
                <label for="nrp">Isi Nrp</label>
                <input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"];?>">
            </li>
            <li>
                <label for="nama">Isi Nama</label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"];?>">
            </li>
            <li>
                <label for="email">Isi Email</label>
                <input type="text" name="email" id="email" required value="<?= $mhs["email"];?>">
            </li>
            <li>
                <label for="jurusan">Isi Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"];?>">
            </li>
            <li>
                <label for="gambar">Isi Gambar</label>
                <input type="text" name="gambar" id="gambar" required value="<?= $mhs["gambar"];?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>