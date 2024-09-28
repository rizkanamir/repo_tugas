<?php
//buatlah aplikasi untuk menentukan diskon ketentuan jika total belanja lebih dari 100k maka akan mendapatkan 
//Algoritma
//1. inisialisasi total belanja 
//2. modulus variabel diskon
//3. jika total belanja lebih dari 200k maka diskon 10%
//4. jika total belanja lebih dari 100k maka diskon 5%
//5 jika tidak maka diskon 0%


$totalbelanja=150000;
$diskon=0;

if($totalbelanja>200000){
    $diskon=0.1;
}elseif($totalbelanja>100000){
    $diskon=0.05;
}else{
    $diskon=0;
}
$potonganharga=$totalbelanja*$diskon;
$totalbayar=$totalbelanja-$potonganharga;

echo $totalbayar;
    