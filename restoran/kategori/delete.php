<?php 
    require_once ".../function.php";

    $sql = "DELETE FROM tblkategori WHERE idkategori = $id";

    $result = mysqli_query($koneksi, $sql);

    header('location:https://localhost/php-video-phpuntuksiswasmk/restoran/kategori/select.php');
?>