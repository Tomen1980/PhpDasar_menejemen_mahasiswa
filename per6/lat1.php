<?php
//variabel scope/lingkup variabel
//.........
// $x = 10;

// function tampilX(){
//     global $x;
//     echo $x;
// }
// tampilX();

//SUPERGLOBALS
//...........
//GET

$mahasiswa = [
    [
        "nama" => "agung",
        "nrp" => "123",
        "email" => "agung@gmail.com",
        "jurusan" => "SI"
    ],

    [
        "nama" => "juman",
        "nrp" => "213",
        "email" => "juman@gmail.com",
        "jurusan" => "TI",
        "tugas" => [70, 80, 90]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

        <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
            <a href="lat2.php?nama=<?= $mhs["nama"] 
            ?>&nrp=<?= $mhs["nrp"] ?>&email=<?= $mhs["email"] 
            ?>&jurusan=<?= $mhs["jurusan"] ?>">
            
            <li><?= $mhs["nama"] ?></li>
            
            </a>
    <?php endforeach; ?>
        </ul>
</body>

</html>