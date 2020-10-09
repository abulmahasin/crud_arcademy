<!DOCTYPE html>
<html lang="en">
<head>
 <title>Toko Maju Bersama</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
 <script src="js/jquery.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
$id = $_GET['id']; 
//koneksi database
include('koneksi.php');
//query
$query = "SELECT * FROM produk WHERE id_produk='$id'";
$result = mysqli_query($conn, $query);
?>

<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">
 <h3>Update Data Produk</h3>
 <form role="form" action="edit.php" method="get">
 <?php
 while ($row = mysqli_fetch_assoc($result)) {
 ?>

 <input type="hidden" name="id_prdk" value="<?php echo $row['id_produk']; ?>">

 <div class="form-group">
  <label>Nama Produk</label>
  <input type="text" name="nama_prdk" class="form-control" value="<?php echo $row['nama_produk']; ?>">   
 </div>

 <div class="form-group">
  <label>Keterangan</label>
  <input type="text" name="keterangan_prdk" class="form-control" value="<?php echo $row['keterangan']; ?>">   
 </div>

 <div class="form-group">
  <label>Harga</label>
  <input type="text" name="harga_prdk" class="form-control" value="<?php echo $row['harga']; ?>">   
 </div>

 <div class="form-group">
  <label>Jumlah</label>
  <input type="text" name="jumlah_prdk" class="form-control" value="<?php echo $row['jumlah']; ?>">   
 </div>
 <button type="submit" class="btn btn-success btn-block">Update Produk</button>

 <?php 
 }
 mysqli_close($conn);
 ?>    
 </form>
</div>
</body>
</html>