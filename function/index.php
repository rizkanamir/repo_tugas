<?php
function cetak(){
    echo"Selamat Pagi";
    echo"<br>";
}

cetak();
cetak();

function ageCount($nama,$tanggal,$tahun){
    $umur=date("Y")-$tahun;
    $umur=date("Y")-$tahun;
    echo"Hellow $nama,umur kamu $umur <br>";
}
ageCount("Andi,2009");
ageCount("Budi,2001");