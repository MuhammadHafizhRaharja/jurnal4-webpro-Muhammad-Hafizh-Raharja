<?php
$arrMhs = [
[
	"nim" => "113",
	"nama" => "Hafizh",
	"usia" => 17
],
[
	"nim" => "114",
	"nama" => "Raharja",
	"usia" => 25
]
];

//deklarasi fungsi
function sayHallo($visitor){
	echo "Selamat datang, $visitor";
}

function penjumlahan($a, $b){
	$hasil = $a + $b;
	return $hasil;
}

function jmlMhs($data){
	return count($data);
}

function totalUsia($data){
	$total = 0;
	foreach ($data as $mhs){
		$total += $mhs["usia"];
	}
	return $total;
}

?>