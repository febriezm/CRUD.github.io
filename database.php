<?php
$servername = "localhost";
$database = "inventaris_barang";
$username = "root";
$password = "";
$koneksi = mysqli_connect($servername, $username, $password, $database);
if (!$koneksi) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
function tampildata($kueri)
{
    global $koneksi;
    $hasil = mysqli_query($koneksi, $kueri);
    $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)) {
        $rows[] = $row;
    }
    return $rows;
}

function inputdata($inputdata)
{
    global $koneksi;
    $sql = mysqli_query($koneksi, $inputdata);
    return $sql;
}

?>