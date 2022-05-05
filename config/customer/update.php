<?php

include("../connection.php");
$id      = $_POST['id_customer'];
$nama    = $_POST['nama'];
$alamat  = $_POST['alamat'];
$jenis   = $_POST['jenis'];
$telp    = $_POST['telp'];

mysqli_query($conn, "UPDATE tb_customer set
                     Nama_customer='$nama',
                     Alamat='$alamat',
                     Jenis_kelamin='$jenis',
                     No_telpon='$telp'
                     WHERE Id_customer='$id'");

header("location: ".base_url("/view/customer/index.php"));

?>