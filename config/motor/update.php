<?php

include("../connection.php");
$id      = $_POST['id_motor'];
$no_plat = $_POST['no_plat'];
$jenis   = $_POST['jenis'];
$tahun   = $_POST['tahun'];
$warna   = $_POST['warna'];
$merk    = $_POST['merk'];

mysqli_query($conn, "UPDATE tb_motor set
                     No_plat='$no_plat',
                     Jenis_motor='$jenis',
                     Tahun_buat='$tahun',
                     warna='$warna',
                     Merk='$merk'
                     WHERE Id_motor='$id'");

header("location: ".base_url("/view/motor/index.php"));

?>