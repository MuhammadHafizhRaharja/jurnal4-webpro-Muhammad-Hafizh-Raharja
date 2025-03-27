<?php
include "dtMahasiswa.php";

$arrProdi = [
	"SI" => "D3 Sistem Informasi",
	"SIA" => "D3 Sistem Informasi Akutansi",
	"TK" => "D3 Teknologi Komputer",
	"RPLA" => "D3 Rekayasa Perangkat Lunak Aplikasi",
	"TT" => "D3 Teknik Telekomunikasi",
	"MP" => "D3 Manajemen Pemasaran"
];

if (isset($_POST['btnSubmit'])) {
$newMhs = addMhs ($_POST ['nim'], $_POST ['namalengkap' ],
$_POST ['jeniskelamin' ], $_POST ['programstudi' ], $_POST
['alamat']);

$arrMhs [] = $newMhs;
}
?>

<table border="1">
	<thead>
		<th>No</th>
		<th>NIM</th>
		<th>Nama Lengkap</th>
		<th>Jenis kelamin</th>
		<th>Program Studi</th>
		<th>Alamat</th>
	</thead>
	<tbody>
	<?php
	foreach ($arrMhs as $key => $mhs){
	?>
		<tr>
			<td><?= ++$key ?></td>
			<td><?= $mhs['nim']?></td>
			<td><?= $mhs['namalengkap']?></td>
			<td><?= $mhs['jeniskelamin']?></td>
			<td><?= $mhs['programstudi']?></td>
			<td><?= $mhs['alamat']?></td>
		</tr>
	<?php } ?>
	</tbody>
</table>
<?php
/*
echo "NIM: ".$_POST["nim"]."<br>";
echo "Nama Lengkap: ".$_POST["namalengkap"]."<br>";
$_POST["jeniskelamin"] == "L" ? $jk="Laki-Laki" : $jk="Perempuan";
echo "Jenis kelamin: ".$jk."<br>";
echo "Program Studi: ".$arrProdi[$_POST["programstudi"]]."<br>";
echo "Alamat: ".$_POST["alamat"]."<br>";
?>