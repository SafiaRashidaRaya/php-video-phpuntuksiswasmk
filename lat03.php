<?php 
   
    function study (){
        echo "saya belajar php";
    }

    function squarearea($p,$l){
        $luas = $p * $l;

        return $luas;
    }

    // squarearea(6,10);

    function output(){
        return "kembali";
    }

    echo output() ."<br>";
    echo squarearea(5,9);

?>