<?php

$id_jenis=$_GET['id_jenis'];
$nama_jenis=$_POST['nama_jenis'];
$id_barang=$_POST['id_barang'] ;
$nama_barang=$_POST['nama_barang']; 
$id_jenis=$_POST['id_jenis'] ;
$harga=$_POST['harga'] ;
$stok=$_POST['stok'] ;

include '../../config/koneksi.php';

$query=mysqli_query($conn, "UPDATE barang SET nama_barang='$nama_barang' WHERE id_barang ='$id_barang'"); 

if ($query){
    echo"<script>alert('Edit barang Berhasil')</script>";
    echo"<script>window.location.href='index.php'</script>";
}else {
    echo"<script>alert('Edit barang Gagal')</script>";
    echo"<script>window.location.href='index.php'</script>";
}