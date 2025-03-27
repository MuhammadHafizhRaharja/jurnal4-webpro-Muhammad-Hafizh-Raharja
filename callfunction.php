<?php
include"function.php";
//pemanggilan fungsi
sayHallo("Hafizh Raharja");
echo "<br>";
sayHallo("Hafizh");
echo "<br>";
sayHallo("Raharja");
echo "<br>";

echo penjumlahan(10,7);
echo "<br>";
$nilai1 = 8;
$nilai2 = 9;
echo "Hasil penjumlahan bilangan $nilai1 dengan $nilai2 adalah ".penjumlahan($nilai1, $nilai2);
echo "<hr>";
//var_dump($arrMhs);
//echo "<br>";
//print_r($arrMhs);

echo"Jumlah mahasiswa terdaftar sebanyak ".jmlMhs($arrMhs)." orang";
echo "<br>";
echo "Total usia semua mahasiswa adalah ".totalUsia($arrMhs)." tahun";
?>