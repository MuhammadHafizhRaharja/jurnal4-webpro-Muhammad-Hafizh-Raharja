<?php

$booking_hotel = array(
    array("Budi", 2, 500000), // 2 malam, tidak dapat diskon dan kupon
    array("Ani", 4, 450000),  // 4 malam, diskon 15% + 1 kupon sarapan
    array("Dedi", 6, 550000), // 6 malam, diskon 15% + 2 kupon sarapan
    array("Siti", 5, 400000), // 5 malam, diskon 15% + 1 kupon sarapan
);

$total_pendapatan = 0;
$total_diskon = 0;
$total_kupon = 0;

echo "Daftar Booking hotel:<br>";

foreach ($booking_hotel as $nomor => $daftarHotel) {
    $nama = $daftarHotel[0];
    $malam = $daftarHotel[1];
    $harga = $daftarHotel[2];
    
    $diskon = 0;
    $kupon = 0;
    
    if ($malam > 5) {
        $diskon = 0.15 * $harga * $malam;
        $kupon = 2;
    } elseif ($malam > 3) {
        $diskon = 0.15 * $harga * $malam;
        $kupon = 1; 
    }

    $total_harga = $harga * $malam - $diskon;
    $total_pendapatan += $total_harga;
    $total_diskon += $diskon;
    $total_kupon += $kupon;

    echo ($nomor + 1) . ". " . $nama . " - " . $malam . " malam x " . 
	number_format($harga, 0, ',', '.') . " = " . number_format($total_harga, 0, ',', '.') . " (Diskon " . ($diskon > 0 ? "15%: " . 
	number_format($diskon, 0, ',', '.') . " , " : "") . $kupon . " kupon sarapan)<br>";
}

echo "<br>Total Pendapatan Hotel Setelah Diskon: " . number_format($total_pendapatan, 0, ',', '.') . "<br>";
echo "Total Diskon yang diberikan: " . number_format($total_diskon, 0, ',', '.') . "<br>";
echo "Total Kupon Sarapan yang Dikeluarkan: " . $total_kupon . " Kupon";

?>
