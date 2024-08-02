<!doctype html>
<?php
session_start();
include('koneksi.php');
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Barang</title>
  </head>
  <body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- JavaScript untuk menampilkan Modal -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand text-dark fw-bold" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-dark fw-bold active" aria-current="page" href="index.php">Tabel Barang</a>
        </li>   
      </ul>
      <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="searchInput">
      </form>
    </div>
  </div>
</nav>
<br>

<h1 h1 style="text-align:center">Update Data Barang</h1>
<div class="container">
    <form method="post" name="theform" action="barang_prosesedit.php" class="form-horizontal" onsubmit="return valid(this);" enctype="multipart/form-data">
    <?php
	    $id = $_GET['id'];
		$sql ="SELECT * FROM tabel_barang WHERE id='$id'";
		$query = mysqli_query($koneksidb,$sql);
		$result = mysqli_fetch_array($query);
	?>
    <div class="mb-8">
        <div class="col col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Kode Barang</label>
            <input type="hidden" name="id" class="form-control" value="<?php echo $id;?>" required>
            <input type="text" class="form-control" value="<?php echo htmlentities($result['kode_barang']);?>" name="kode_barang" id="kode_barang" required>
        </div>

        
        <div class="col col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" value="<?php echo htmlentities($result['nama_barang']);?>" name="nama_barang" id="nama_barang" required> 
        </div>

        <div class="col col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Jenis Barang</label>
            <input type="text" class="form-control" value="<?php echo htmlentities($result['jenis_barang']);?>" name="jenis_barang" id="jenis_barang" required> 
        </div>

        <div class="col col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Satuan Barang</label>
            <input type="number" class="form-control" value="<?php echo htmlentities($result['satuan_barang']);?>" name="satuan_barang" id="satuan_barang" required> 
        </div>

        <div class="col col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Merk Barang</label>
            <input type="text" class="form-control" value="<?php echo htmlentities($result['merk_barang']);?>" name="merk_barang" id="merk_barang" required> 
        </div>

        <div class="col col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Produsen Barang</label>
            <input type="text" class="form-control" value="<?php echo htmlentities($result['produsen_barang']);?>" name="produsen_barang" id="produsen_barang" required> 
        </div>

        <div class="col col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Harga Beli Barang</label>
            <input type="number" class="form-control" value="<?php echo htmlentities($result['harga_beli_barang']);?>" name="harga_beli_barang" id="harga_beli_barang" required> 
        </div>

        <br>
        <div class="col col-lg-4">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <a href="index.php" class="btn btn-outline-primary">Batal</a>
        </div>
    </div>
    </form>
    </div>
  </body>

