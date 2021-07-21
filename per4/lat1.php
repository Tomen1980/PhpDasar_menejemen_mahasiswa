<?php 
//array
//variabel yang menampung banyak nilai 
//element pada array boleh memiliki banyak tipe data
//pasangan antara key dan value
//keynya dimulai dari index ke 0


//membua array cara lama
$hari = array("senin","selasa","rabu");
//cara baru
$bulan = ["januari","februari","maret"];

//menampilkan array
//var_dump()/print_r
// var_dump($hari);
// echo "<br>";
// print_r($bulan)

//menambahkan element baru pada array
var_dump($hari);
$hari[]="kamis";
echo "<br>";
var_dump($hari);

?>