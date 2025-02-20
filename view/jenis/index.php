<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../barang">barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <h1>data barang</h1>
    <a href="tambah.php" class="btn btn-info">Tambah Data Baru</a>
    <table class="table table-striped">
            <tr> 
                <th scope="col">No</th>
                <th scope="col">Id_jenis</th>
                <th scope="col">nama_jenis</th>
                <th scope="col">aksi</th>
            </tr>
            <?php
            include '../../config/koneksi.php';
            $query = mysqli_query(mysql: $conn,query:"SELECT * FROM jenis");
            $no=1;
            if(mysqli_num_rows(result:$query)){
                echo "";
                while ($result=mysqli_fetch_assoc(result: $query)){
                    ?>
                    <tr>
                        <td><?php echo $no?> </td>
                        <td><?php echo $result['id_jenis'] ?> </td>
                        <td><?php echo $result['nama_jenis'] ?> </td>
                        <td>
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    }
            }
            ?>
    </table>
</div>
</body>
</html>