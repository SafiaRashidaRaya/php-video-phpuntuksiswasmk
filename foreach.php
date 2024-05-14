<?php 

// $nama = array("budi","tejo","siti","ira",100) ;

// var_dump($nama);

// echo "<br>";

// foreach($nama as $k) {
//     echo $k."<br>";
// }

$nama = array(
    "joni" => "surabaya",
    "budi"=> "malang",
    "tejo" => "jakarta",
    "siti" => "sidoarjo",
);

var_dump($nama);

foreach ($nama as $k => $v) {
    echo "<br>".$k." => ".$v;
}



?>