<?php
$variabelA = 7;
$variabelB = "10";

if ($variabelA > $variabelB){
	echo "$variabelA lebih besar dari $variabelB";
}
else if($variabelA < $variabelB) {
	echo "$variabelA lebih kecil dari $variabelB";
}
else{
	echo "$variabelA sama dengan $variabelB";
}
echo"<br>";
/*Menampilkan nama program studi berdasarkan kode prodi*/

$prodi = "D3 SI";
if ($prodi == "D3 SI") {
	echo "D3 Sistem Informasi";
} elseif ($prodi == "D3 TK"){
	echo "D3 Teknologi Komputer";
} elseif ($prodi == "D3 SIA"){
	echo "D3 Sistem Informasi Akutansi";
} else {
	echo"Prodi Tidak Dikenal";
}
echo"<br>";
/*Switch case*/
switch ($prodi){
	case"D3 SI";
		echo"D3 Sistem Informasi";
		break;
	case"D3 TK";
		echo"D3 Teknologi Komputer";
		break;
	case"D3 SIA";
		echo"D3 Sistem Informasi Akutansi";
		break;
	default;
		echo"Prodi Tidak Dikenali";
		break;
}
echo"<br>";
/*Perulangan*/


?>