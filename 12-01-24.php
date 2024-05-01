<h1>Belajar PHP</h1>
<form action="" method= "get">
    Nama:
    <input type="text" name="nama" placeholder="Masukkan Nama">
    <input type="submit" name="tombol" value= "save">
</form>
<a href="?coba= rpl&siswa=safia">Klik disini</a>
<br>
<?php 
    echo "<h2>Belajar PHP</h2>";
    function lingkaran($r){
        $l= 3.14*($r**2);
        return $l;
    };
    echo lingkaran(6).'<br>';
    function segitiga($a,$t){
        $ls= 0.5*$a*$t;
        return $ls;
    }
    echo segitiga(3,4).'<br>';
    function tabung($r,$t){
        $lt= 2*3.14*$r*($r+$t);
        return $lt;
    }
    echo tabung(4,6).'<br>';
    function persegi($s){
        $lp= $s**2;
        return $lp;
    }
    echo persegi(7).'<br>';
    
    if(isset($_GET['nama'])){
        $isi=$_GET['nama'];
        echo '<h2>'. $isi .'</h2>';
    }
    
?>
<p>Belajar PHP</p>