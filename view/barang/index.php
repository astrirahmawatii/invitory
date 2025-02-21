<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Document</title>
    
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../barang">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../jenis/index.php">Jenis</a>
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
<div class="container">
    <h1>data barang</h1>
    <a href="tambah.php" class="btn btn-info"> <i class="fa-solid fa-plus"></i> Tambah Data Baru</a>
    <table class="table table-striped">
        <thead>
            <tr> 
                <th scope="col">No</th>
                <th scope="col">Id Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Id Jenis</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">aksi</th>
            </tr>
            <?php
            include '../../config/koneksi.php';
            $query = mysqli_query(mysql: $conn,query:"SELECT * FROM barang");
            $no=1;
            if(mysqli_num_rows(result:$query)){
                echo "";
                while ($result=mysqli_fetch_assoc(result: $query)){
                    ?>
                    <tr>
                        <td><?php echo $no?> </td>
                        <td><?php echo $result['id_barang'] ?> </td>
                        <td><?php echo $result['nama_barang'] ?> </td>
                        <td><?php echo $result['id_jenis'] ?> </td>
                        <td><?php echo $result['harga'] ?> </td>
                        <td><?php echo $result['stok'] ?> </td>

                        <td>
                        <a href="edit.php?id_barang=<?php echo $result['id_barang']?>"
                         class="btn btn-warning"> <i class="fa-solid fa-pen-to-square"></i>Edit </a>
                        
                         <a href="hapus.php?id_barang=<?php echo $result['id_barang']?>"
                         onclick="return confirm ('Yakin akan di hapus?')"
                         class="btn btn-danger"><i class="fa-solid fa-trash"></i>Hapus </a>
                      
                        </td>    
                    </tr>
                    <?php
                    $no++; }
                    }
                    else{
                      echo"DATA KURANG";
                    }            
            ?>
        </thead>
    </table>
</div>
</body>
</html>