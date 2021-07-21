<?php 
$mahasiswa = [
    ["Agung","040","SI","agung@gmail.com"],
    ["Juman","050","TI","juman@gmail.com"],
    ["Andrian","060","TK","andrian@gmail.com"],
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
    
    <ul>
        <?php foreach ($mahasiswa as $mhs ) : ?>
            <li>Nama : <?= $mhs[0] ?></li>
            <li>NRP : <?= $mhs[1] ?></li>
            <li>Jurusan : <?= $mhs[2] ?></li>
            <li>Email : <?= $mhs[3] ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>