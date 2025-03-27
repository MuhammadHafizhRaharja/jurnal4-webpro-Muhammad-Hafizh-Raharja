<?php

$waktu_peserta = array("Andi" => 135, "Budi" => 162, "Citra" => 120, "Dewi" => 135);

asort($waktu_peserta);

echo "Urutan waktu Penyelesaian (dalam menit):<br>";

foreach ($waktu_peserta as $peserta => $waktu) {
    $jam = intdiv($waktu, 60);
    $menit = $waktu % 60;
    echo $peserta . ": " . $waktu . ", ";
}

echo "<br>Peserta dengan waktu tercepat: " . key($waktu_peserta) . " dengan waktu ";
$waktu_tercepat = current($waktu_peserta);
$jam_tercepat = intdiv($waktu_tercepat, 60);
$menit_tercepat = $waktu_tercepat % 60;
echo $jam_tercepat . " jam " . $menit_tercepat . " menit";
?>