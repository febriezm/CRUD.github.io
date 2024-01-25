<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>New Data</title>
</head>

<body>

    <div class="jumbotron">
        <h1>New Collumn</h1>
        <form action="proses_input.php" method="post">
            <div class="form-group">
                <label for="note">No</label>
                <input type="text" class="form-control" name="Nomor">
                <label for="note">Tanggal</label>
                <input type="date" class="form-control" name="Tanggal" value=";">
                <label for="note">Kode Barang</label>
                <input type="text" class="form-control" name="Kode_Barang">
                <label for="note">Nama Barang</label>
                <input type="text" class="form-control" name="Nama_Barang">
                <label for="note">Uraian Barang/Merk Barang</label>
                <input type="text" class="form-control" name="UraianMerk_Barang">
                <label for="note">Distributor</label>
                <input type="text" class="form-control" name="Distributor">
                <label for="note">Kwantitas</label>
                <input type="text" class="form-control" name="Kwantitas">
                <label for="note">Thn</label>
                <input type="year" class="form-control" name="Tahun" value="">
                <label for="note">Asal Barang</label>
                <input type="text" class="form-control" name="Asal_Barang">
                <label for="note">Tgl. Perolehan</label>
                <input type="date" class="form-control" name="Tgl_Perolehan" value=";">
                <label for="note">Keadaan Barang</label>
                <input type="text" class="form-control" name="Keadaan_Barang">
                <label for="note">Harga</label>
                <input type="text" class="form-control" name="Harga">
                <label for="note">Ket</label>
                <input type="text" class="form-control" name="Ket">
            </div>
            <input type="submit" value="Save" class="font-weight-bold btn btn-secondary">
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