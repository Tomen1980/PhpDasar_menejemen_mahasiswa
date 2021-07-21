<?php
// $mahasiswa = [
//     ["agung","123","SI","agung@gmail.com"],
//     ["juman","223","TI","juman@gmail.com"],
//     ["andrian","423","SI","andrian@gmail.com"],

// ]

//array asosiatif
//key buatan sendiri 

$mahasiswa = [
    [
    "nama"=>"agung",
    "nrp"=>"123",
    "email"=>"agung@gmail.com",
    "jurusan"=>"SI"],

    [
    "nama"=>"juman",
    "nrp"=>"213",
    "email"=>"juman@gmail.com",
    "jurusan"=>"TI"],
    "tugas"=>[70,80,90]
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
<?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?= $mhs["nama"] ?></li>
        <li>NRP : <?= $mhs["nrp"] ?></li>
        <li>Email : <?= $mhs["email"] ?></li>
        <li>Jurusan : <?= $mhs["jurusan"] ?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>
