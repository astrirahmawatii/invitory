<?php

$id_barang=$_GET['id_barang'];

include '../../config/koneksi.php';

$query=mysqli_query($conn, "DELETE FROM barang WHERE id_barang='$id_barang'");

if ($query){
    echo"<script>alert('Hapus Jenis Berhasil')</script>";
    echo"<script>window.location.href='index.php'</script>";
}else {
    echo"<script>alert('Hapus Jenis Gagal')</script>";
    echo"<script>window.location.href='index.php'</script>";
}