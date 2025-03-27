<?php
$x = 5; //inputan bisa dirubah 2x dan gunakan perulangan

echo "Faktorial :<br>";

$faktorial = 1;
for ($i = 1; $i <= $x; $i++) {
    $faktorial *= $i;
    echo $faktorial;
    if ($i < $x) {
        echo ", ";
    }
}
?>