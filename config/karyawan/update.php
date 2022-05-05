<?php

include("../connection.php");
$id      = $_POST['id_karyawan'];
$nama    = $_POST['nama'];
$alamat  = $_POST['alamat'];
$jenis   = $_POST['jenis'];
$telp    = $_POST['telp'];

mysqli_query($conn, "UPDATE tb_karyawan set
                     Nama_karyawan='$nama',
                     Alamat='$alamat',
                     Jenis_kelamin='$jenis',
                     No_telpon='$telp'
                     WHERE Id_Karyawan='$id'");

header("location: ".base_url("/view/karyawan/index.php"));

?>