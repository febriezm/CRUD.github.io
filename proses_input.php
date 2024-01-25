<?php 
 require_once("database.php");
    $no = $_POST['Nomor'];
    $tgl = $_POST['Tanggal'];
    $kode_brg = $_POST['Kode_Barang'];
    $nm_brg = $_POST['Nama_Barang'];
    $merk_brg = $_POST['UraianMerk_Barang'];
    $dis = $_POST['Distributor'];
    $kwan = $_POST['Kwantitas'];
    $thn = $_POST['Tahun'];
    $asl_brg = $_POST['Asal_Barang'];
    $perolehan = $_POST['Tgl_Perolehan'];
    $kon_brg = $_POST['Keadaan_Barang'];
    $hrg = $_POST['Harga'];
    $xket = $_POST['Ket'];

 
$simpan=inputdata("INSERT INTO laboratorium_robotika (Nomor,Tanggal,Kode_Barang,Nama_Barang,UraianMerk_Barang,Distributor,Kwantitas,Tahun,Asal_Barang,Tgl_Perolehan,Keadaan_Barang,Harga,Ket) VALUES ('$no','$tgl','$kode_brg','$nm_brg','$merk_brg','$dis','$kwan','$thn','$asl_brg','$perolehan','$kon_brg','$hrg','$xket')");
if($simpan) {
header("location:store.php");
}
?>