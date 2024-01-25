<?php

include("database.php");
 

if(isset($_POST['update']))
{	
    $id = $_POST['id'];
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
   
    $result = mysqli_query($koneksi, "UPDATE laboratorium_robotika SET Nomor='$no',Tanggal='$tgl',Kode_Barang='$kode_brg',Nama_Barang='$nm_brg',UraianMerk_Barang='$merk_brg',Distributor='$dis',Kwantitas='$kwan',Tahun='$thn',Asal_Barang='$asl_brg',Tgl_Perolehan='$perolehan',Keadaan_Barang='$kon_brg',Harga='$hrg',Ket='$xket' WHERE Nomor=$id");
    
   
    header("Location: store.php");
}
?>
<?php

$kode = $_GET['kode'];
 

$result = mysqli_query($koneksi, "SELECT * FROM laboratorium_robotika WHERE Nomor=$kode");
 
while($user_data = mysqli_fetch_array($result))
{
    $no = $user_data['Nomor'];
    $tgl = $user_data['Tanggal'];
    $kode_brg = $user_data['Kode_Barang'];
    $nm_brg = $user_data['Nama_Barang'];
    $merk_brg = $user_data['UraianMerk_Barang'];
    $dis = $user_data['Distributor'];
    $kwan = $user_data['Kwantitas'];
    $thn = $user_data['Tahun'];
    $asl_brg = $user_data['Asal_Barang'];
    $perolehan = $user_data['Tgl_Perolehan'];
    $kon_brg = $user_data['Keadaan_Barang'];
    $hrg = $user_data['Harga'];
    $xket = $user_data['Ket'];
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Update Data Here!</title>
</head>

<body>

    <div class="jumbotron">
        <h1>Update Data</h1>
        <form name="update_data" action="update.php" method="post">
            <div class="form-group">
                <label for="note">No</label>
                <input type="text" class="form-control" name="Nomor" value=<?php echo $no;?>>
                <label for="note">Tanggal</label>
                <input type="date" class="form-control" name="Tanggal" value=<?php echo $tgl;?>>
                <label for="note">Kode Barang</label>
                <input type="text" class="form-control" name="Kode_Barang" value=<?php echo $kode_brg;?>>
                <label for="note">Nama Barang</label>
                <input type="text" class="form-control" name="Nama_Barang" value=<?php echo $nm_brg;?>>
                <label for="note">Uraian Barang/Merk Barang</label>
                <input type="text" class="form-control" name="UraianMerk_Barang" value=<?php echo $merk_brg;?>>
                <label for="note">Distributor</label>
                <input type="text" class="form-control" name="Distributor" value=<?php echo $dis;?>>
                <label for="note">Kwantitas</label>
                <input type="text" class="form-control" name="Kwantitas" value=<?php echo $kwan;?>>
                <label for="note">Thn</label>
                <input type="year" class="form-control" name="Tahun" value=<?php echo $thn;?>>
                <label for="note">Asal Barang</label>
                <input type="text" class="form-control" name="Asal_Barang" value=<?php echo $asl_brg;?>>
                <label for="note">Tgl. Perolehan</label>
                <input type="date" class="form-control" name="Tgl_Perolehan" value=<?php echo $perolehan;?>>
                <label for="note">Keadaan Barang</label>
                <input type="text" class="form-control" name="Keadaan_Barang" value=<?php echo $kon_brg;?>>
                <label for="note">Harga</label>
                <input type="text" class="form-control" name="Harga" value=<?php echo $hrg;?>>
                <label for="note">Ket</label>
                <input type="text" class="form-control" name="Ket" value=<?php echo $xket;?>>
            </div>
            <td><input type="hidden" name="id" value=<?php echo $_GET['kode'];?>></td>
            <input type="submit" value="Update" name="update" class="font-weight-bold btn btn-secondary">
            <a class="font-weight-bold btn btn-secondary" href="home.php" role="button">Home</a>
        </form>
    </div>

     <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

</body>
</html>

