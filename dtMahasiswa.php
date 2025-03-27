<?php
$arrMhs  = [
[
  "nim" => "11123",
  "namalengkap" => "Hafizh",
  "jeniskelamin" => "L",
  "programstudi" => "SIA",
  "alamat" => "Medan"
],
[
  "nim" => "11124",
  "namalengkap" => "Chizuru",
  "jeniskelamin" => "P",
  "programstudi" => "SI",
  "alamat" => "Japan"
]
];

function addMhs($id, $nama, $jk, $prodi, $alamat) {
		$data = [
		"nim" => $id,
		"namalengkap" => $nama,
		"jeniskelamin" => $jk,
		"programstudi" => $prodi,
		"alamat" => $alamat
	  ];
	  
	return $data;
}
?>