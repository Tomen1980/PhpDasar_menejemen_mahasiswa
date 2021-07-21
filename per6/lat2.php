<?php 
//mengecek apakah ada GET
if(
    !isset($_GET["nama"]) || 
    !isset($_GET["nrp"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"]) ){
    //meredirect halaman 
    header("Location: lat1.php");
    exit;
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<ul>
    <li><?= $_GET["nama"] ?></li>
    <li><?= $_GET["nrp"] ?></li>
    <li><?= $_GET["jurusan"] ?></li>
    <li><?= $_GET["email"] ?></li>
</ul>

<a href="lat1.php">Kembali</a>
    
</body>
</html>