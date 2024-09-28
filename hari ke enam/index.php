<?php

//menentukan honor karyawam dengan kemungkinan lembur.karyawan honorer di PT.ABC digaji berdasarkan jumlah jam karjannya selama satu minngu. upah per jam adalah Rp.2000. bila jumlah jam kerja lebih besar dari 48 jam,maka sisanya doianggap lembur.upah lembur adalah Rp.3000 per jam.Tulislah algoritma yang memnbaca jumlah jam kerja seorang karyawan selama satu minggu lalu memnentukan upah minggunya,lalu dari algoritma tersebut buatlah aplikasi menggunakan PHP.
//Algoritma
//1. Inisialisasi Variabel upah per jam
//2. Inisialisasi variabel upah lembur
//3. jika upah per jam Rp.2000 
$jamkerja = 1;

$upahperjam = 2000;
$upahlembur = 3000;
$jamnormal = 48;
if($jamkerja > $jamnormal){
    $jamlembur = $jamkerja - $jamnormal;
    $Totalupah = ($jamnormal * $upahperjam) +  ($jamlembur * $upahlembur);
} else {
    $Totalupah = $jamkerja * $upahperjam;
}
echo "Total upah karyawan: Rp. " . $totalupah. "";
?>