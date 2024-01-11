<?php 
// operator mtk
$a = 5;
$b = 3;

$c = $a + $b;

echo $c. '<br>';

$c = $a - $b;
echo $c. '<br>';

$c = $a * $b;
echo $c. '<br>';

$c = $a / $b;
echo round($c). '<br>';

$c = $a % $b;
echo $c. '<br>';

//operator logika 

$c = $a < $b;
echo $c;

$c = $a > $b;
echo $c;

$c = $a == $b;
echo $c. '<br>';

$c = $a != $b;
echo $c;

//increment&decrement

$a--;
echo $a. '<br>';

//operator string 

$nama = 'Sura';
$kota = 'baya';

$hasil = $nama. $kota;
$hasil .=' Kota Pahlawan';
echo $hasil;

?>