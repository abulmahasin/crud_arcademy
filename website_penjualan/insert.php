<?php

include('koneksi.php');

$n_produk = $_POST['nama_prdk'];
$k_produk = $_POST['keterangan_prdk'];
$h_produk = $_POST['harga_prdk'];
$j_produk = $_POST['jumlah_prdk'];

//query

$query =  "INSERT INTO produk(nama_produk , keterangan , harga , jumlah) VALUES('$n_produk' , '$k_produk' , '$h_produk' , '$j_produk')";

if (mysqli_query($conn , $query)) {

 header("location:inputan.php");
}
else{
 echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>