<?php

$conn = mysqli_connect('localhost',
'root',
'',
'db_invetory_xi4');

if (!$conn){
    die ('koneksi gagal |' . mysqli_connect_error());
}
