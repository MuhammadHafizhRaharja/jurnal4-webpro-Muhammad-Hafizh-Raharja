<?php
$kalimat = "Seorang pemimpin yang adil akan dihormati oleh rakyatnya, karena keadilan membawa kesejahteraan bagi semua orang.";
$cari = "adil"; // kata yang ingin diganti
$ganti = "setara"; // kata pengganti

$kalimat_baru = str_ireplace($cari, $ganti, $kalimat, $jumlah);

echo str_ireplace($cari, ("<b>" . $ganti . "</b>"), $kalimat_baru) . "<br>";
echo "Jumlah kata yang diganti: " . $jumlah . " kata";
?>
