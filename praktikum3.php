<?php

	
	$arrBuku = [
		[
			"judul" => "Pemrograman Web",
			"harga" => 50000,
			"jumlahTerjual" => 3,
		],
		[
			"judul" => "Belajar Javascript",
			"harga" => 60000,
			"jumlahTerjual" => 2,
		],
		[
			"judul" => "HTML & CSS",
			"harga" => 40000,
			"jumlahTerjual" => 5,
		],



	];
	
	var_dump($arrBuku);
	
	echo "<hr>";
	
	function totalBuku($data){
		$total = 0;
		foreach ($data as $arrBuku){
			$total += $arrBuku["harga"] * $arrBuku["jumlahTerjual"];
		} 
		return $total;
	}
		
	function rataRata($arrBuku){
		$totalPendapatan = totalBuku($arrBuku);
		$mean = count ($arrBuku);
		return $totalPendapatan / $mean;
	}
	

	
	
	echo "Total Pendapatan: Rp".totalBuku($arrBuku)."<br>";
	echo "Rata-rata pendapatan per buku: ".rataRata($arrBuku)."<br>";
	
	
	

	
?>