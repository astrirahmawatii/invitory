<?Php

$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$id_jenis = $_POST['id_jenis'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

include '../../config/koneksi.php';

$query = mysqli_query($conn, query: "INSERT INTO barang VALUES
('$id_barang','$nama_barang','$id_jenis','$harga','$stok')");

if ($query){
    echo"<script>alert('Tambah Berhasil')</script>";
    echo"<script>window.location.href='index.php'</script>";
}else {
    echo"<script>alert('Tambah gagal')</script>";
    echo"<script>window.location.href='index.php'</script>";
}