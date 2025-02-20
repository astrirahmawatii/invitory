<?Php
$id_jenis = $_POST['id_jenis'];
$nama_jenis = $_POST['nama_jenis'];

include '../../config/koneksi.php';

$query = mysqli_query($conn,query: "INSERT INTO barang VALUES(''$id_jenis','$nama_jenis')");

if ($query){
    echo"<script>alert('Tambah Berhasil')</script>";
    echo"<script>window.location.href='index.php'</script>";
}else {
    echo"<script>alert('Tambah Berhasil')</script>";
    echo"<script>window.location.href='index.php'</script>";
}