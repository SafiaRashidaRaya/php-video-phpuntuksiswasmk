<?php 
// $nama = array('satu', 'dua', 'tiga', 4);
// var_dump($nama);
// echo '<br>';
// echo $nama[3];

// // for ($i = 0; $i < 4; $i++) {
// //     // echo $i;
// //     echo $nama[$i].'<br>';
// // };

// foreach ($nama as $k ){
//     echo $k.'<br>';
// }


// $nama = array(
// "joni" => "surabaya",
// "budi"=> "malang",
// "tejo" => "jakarta",
// "siti" => "sidoarjo",
// );

$nama['joni'] = 'surabaya';
$nama['budi'] = 'malang';
$nama['tejo'] = 'jakarta';
$nama['siti'] = 'sidoarjo';
$nama['kelima'] = 'irian jaya';

var_dump($nama);

echo"<br>";

// echo $nama['siti'];

foreach($nama as $key => $value) {
echo $key. "=>". $value;
echo"<br>";

}
?>

