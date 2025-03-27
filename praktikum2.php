<?php
include "praktikum.php";

function rataRata($bukuBuku){
		$totalPendapatan = totalBuku($bukuBuku);
		$mean = count ($bukuBuku);
		return $totalPendapatan / $mean;
	}

function totalBuku($data){
		$total = 0;
		foreach ($data as $bukuBuku){
			$total += $bukuBuku["harga"] * $bukuBuku["terjual"];
		} 
		return $total;
	}
function hitungPendapatanBuku($bukuBuku) {
    $totalPendapatan = 0;
    $totalBukuTerjual = 0;
    $bukuDenganPendapatanTinggi = [];

    foreach ($bukuBuku as $buku) {
        $pendapatanBuku = $buku['harga'] * $buku['terjual'];
        $totalPendapatan += $pendapatanBuku;
        $totalBukuTerjual += $buku['terjual'];

        if ($pendapatanBuku > 150000) {
            $bukuDenganPendapatanTinggi[] = $buku['judul'];
        }
    }

    $rataRataPendapatanPerbuku = $totalPendapatan / $totalBukuTerjual;
	

    echo "Total Pendapatan: Rp" . number_format($totalPendapatan, 2, ',', '.') . "<br>";
    echo "Rata-rata Pendapatan per Buku: Rp" . number_format($rataRataPendapatanPerbuku, 2, ',', '.') . "<br>";

    echo "Buku yang menghasilkan Pendapatan Diatas Rp150.000,00:" . "<br>";
    if (count($bukuDenganPendapatanTinggi) > 0) {
        foreach ($bukuDenganPendapatanTinggi as $judulBuku) {
            echo "- " . $judulBuku . "<br>" . "dengan pendapatan Rp" . number_format($pendapatanBuku, 2, ',', '.')."<br>";
        }
    } else {
        echo "Tidak ada buku dengan pendapatan lebih dari Rp150.000,00"."<br>";
    }
}
hitungPendapatanBuku($bukuBuku);
		echo "Rata-rata pendapatan per buku: ".rataRata($bukuBuku)."<br>";

?>
