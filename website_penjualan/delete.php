<?php 

$id = $_GET['id'];

//include(dbconnect.php);
include('koneksi.php');

//query hapus
$query = "DELETE FROM produk WHERE id_produk = '$id' ";

if (mysqli_query($conn , $query)) {
 # redirect ke index.php
 header("location:inputan.php");
}
else{
 echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($conn);
?>