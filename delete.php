<?php
require_once("database.php");
$kode = $_GET['kode'];
$result = mysqli_query($koneksi,"DELETE FROM laboratorium_robotika WHERE Nomor=$kode");
    header("location:store.php");
    
?>