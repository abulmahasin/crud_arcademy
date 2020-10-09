<!DOCTYPE html>
<html lang="en">
<head>
 <title>Toko Maju Bersama</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
 <script src="js/jquery.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>


 <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

</head>
<body>

 <?php
 //tambahkan dbconnect
 include('koneksi.php');

 //query
 $query = "SELECT * FROM produk";

 $result = mysqli_query($conn , $query);

 ?>

 <div class="container bg-info" style="padding-top: 40px; padding-bottom: 40px;">
  <h3><center>TOKO MAJU BERSAMA</center></h3>
  

<div class="header-right">
          <a href="index.php"><strong>Home</strong></a>
        </div>
  <hr>
  <div class="row">
   <div class="col-sm-4">
    <h3>Form Tambah Produk</h3>
    <form role="form" action="insert.php" method="post">
     <div class="form-group">
      <label>Nama Produk</label>
      <input type="text" name="nama_prdk" class="form-control">
     </div>
     <div class="form-group">
      <label>Keterangan</label>
      <input type="text" name="keterangan_prdk" class="form-control">
     </div>
     <div class="form-group">
      <label>Harga</label>
      <input type="text" name="harga_prdk" class="form-control">
     </div>
     <div class="form-group">
      <label>Jumlah</label>
      <input type="text" name="jumlah_prdk" class="form-control">
     </div>
     <button type="submit" class="btn btn-info btn-block">Tambah Produk</button>     
    </form>
    
   </div>
   <div class="col-sm-8">
    <h3>Tabel Daftar Produk</h3>
    <table class="table table-striped table-hover dtabel">
     <thead>
      <tr>
       <th>No</th>
       <th>Nama Produk</th>
       <th>Keterangan</th>
       <th>Harga</th>
       <th>Jumlah</th>
       <th>Aksi</th>
      </tr>
     </thead>
     
     <tbody> 
      
      <?php
       $no = 1;  
       while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <tr>
       <td><center><?php echo $no++; ?></center></td>
       <td><center><?php echo $row['nama_produk']; ?></center></td>
       <td><center><?php echo $row['keterangan']; ?></center></td>
       <td><center><?php echo $row['harga']; ?></center></td>
       <td><center><?php echo $row['jumlah']; ?></center></td>
       <td>
        <a href="editform.php?id=<?php echo $row['id_produk'];?>" class="btn btn-success" role="button"><center>UBAH</center></a>
        <a href="delete.php?id=<?php echo $row['id_produk']?>" class="btn btn-danger" role="button"><center>HAPUS</center></a>
       </td>
      </tr>

      <?php
       }
       mysqli_close($conn); 
      ?>
     </tbody>
    </table>
   </div>
  </div>
 </div>
</body>
<div class="header-right">
          <img class="logo2" src="gambar/logo.png">
  </div>

  <style type="text/css">
    img {
        width: 100px;
        height:80px;
    }
 </style>

 <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
 <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
 <script>
 $(document).ready(function() {
  $('.dtabel').DataTable();
 } );
 </script>

</html>