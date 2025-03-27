<?php
$jnskelamin = array("Laki-laki","perempuan");
echo strtoupper($jnskelamin[0])."<br>";
echo substr($jnskelamin[0],0,4)."<br>";

if ($jnskelamin[0] == "Laki-laki"){
	echo "Cowok";
} else {
	echo "Cewek";
}
echo "<br>";
$jnskelamin[0] == "Laki-laki" ? $jk ="Cowok" : $jk ="Cewek";
echo $jk;

echo "<br>";
$ukuranarray = count($jnskelamin);
$index = 0;
while ($index < $ukuranarray){
	echo $jnskelamin[$index]."<br>";
	$index++;
}

foreach($jnskelamin as $jk){
	echo "$jk<br>";
}
?>