<!-- <?php
require_once('database.php');
// $note="Select * from note";
$data = tampildata("Select * from laboratorium_robotika");
$nomor = 0;
var_dump($data);
?> -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Inventaris Robotika</title>
</head>

<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary bg-secondary text-warning">
  <div class="container-fluid">
  <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
      <img src="inv.png" alt="Logo" width="45" height="30" class="d-inline-block align-text-top">  
      <h class="font-weight-bold">Store Room</h>
  </div>
</nav>  
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="font-weight-bold nav-link active text-light" aria-current="page" href="home.php">Home</a>
        <a class="font-weight-bold nav-link text-light" href="store.php">Inventaris Barang</a>
        <a class="font-weight-bold nav-link text-light" href="insert.php">Add</a>
      </div>
    </div>
  </div>
</nav>

    <div class="container-fluid jumbotron">
        <h1 class="text-center bg-light text-dark font-italic">"BUKU INDUK BARANG INVENTARIS
            LABORATORIUM ROBOTIKA"
        </h1>
        <table class="text-center table grid table-light">
            <thead class="thead-dark">
                <tr class="font-weight-bold">
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Uraian Barang/Merk Barang</th>
                    <th scope="col">Distributor</th>
                    <th scope="col">Kwantitas</th>
                    <th scope="col">Thn</th>
                    <th scope="col">Asal Barang</th>
                    <th scope="col">Tgl. Perolehan</th>
                    <th scope="col">Keadaan Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Ket</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $laboratorium): ?>
                    <tr>
                        <th scope="row">
                            <?php echo "$laboratorium[Nomor]"; ?>
                        </th>
                        <td>
                            <?php echo "$laboratorium[Tanggal]"; ?>
                        </td>
                        <td>
                            <?php echo "$laboratorium[Kode_Barang]"; ?>
                        </td>
                        <td>
                            <?php echo "$laboratorium[Nama_Barang]"; ?>
                        </td>
                        <td>
                            <?php echo "$laboratorium[UraianMerk_Barang]"; ?>
                        </td>
                        <td>
                            <?php echo "$laboratorium[Distributor]"; ?>
                        </td>
                        <td>
                            <?php echo "$laboratorium[Kwantitas]"; ?>
                        </td>
                        <td>
                            <?php echo "$laboratorium[Tahun]"; ?>
                        </td>
                        <td>
                            <?php echo "$laboratorium[Asal_Barang]"; ?>
                        </td>
                        <td>
                            <?php echo "$laboratorium[Tgl_Perolehan]"; ?>
                        </td>
                        <td>
                            <?php echo "$laboratorium[Keadaan_Barang]"; ?>
                        </td>
                        <td>
                            <?php echo "$laboratorium[Harga]"; ?>
                        </td>
                        <td>
                            <?php echo "$laboratorium[Ket]"; ?>
                        </td>
                        <td>
                            <?php echo "<a href='update.php?kode=$laboratorium[Nomor]'>Edit</a> | <a href= 'delete.php?kode=$laboratorium[Nomor]'>Delete</a>"; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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