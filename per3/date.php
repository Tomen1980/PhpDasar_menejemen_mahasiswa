<?php 
//Date
//untuk menampilkan tanggal format
//....
//    echo date("l, d-M-Y");

//Time
//Unix TimeStamp/EPOCH time
//detik yang sudah berlalu 1 januari 1970
//.....
// echo time();
// echo date("d M Y",time()+60*60*24*2);

//mktime
//membuat detik sendiri 
//mktime(0,0,0,0,0,0)
//jam,menit,detik,bulan,tanggal,tahun
//....
// echo date("l",mktime(0,0,0,1,10,2003))

//strtotime
echo date("l",strtotime("10 jan 2003"))
?>