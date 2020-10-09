<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_prdk'];
$n_produk = $_GET['nama_prdk'];
$k_produk = $_GET['keterangan_prdk'];
$h_produk = $_GET['harga_prdk'];
$j_produk = $_GET['jumlah_prdk'];

//query update
$query = "UPDATE produk SET nama_produk='$n_produk' , keterangan='$k_produk' , harga='$h_produk' , jumlah='$j_produk' WHERE id_produk='$id' ";

if (mysqli_query($conn, $query)) {

 header("location:inputan.php");
 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>