<?php
$usia=79;
if($usia>=-5 and $usia<=12){
    $status="Anak-anak";
}elseif($usia>=13 and $usia<=17){
    $status="Remaja";
}elseif($usia>=18 and $usia<=59){
    $status="Dewasa";
}elseif($usia>=60){
    $status="Lansia";
}

echo "Usia Anda".$usia.",Anda termasuk kedalam kategori".
$status;