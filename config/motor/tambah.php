<?php

    include("../connection.php");
    $no_plat = $_POST['no_plat'];
    $jenis   = $_POST['jenis'];
    $tahun   = $_POST['tahun'];
    $warna   = $_POST['warna'];
    $merk    = $_POST['merk'];

    mysqli_query($conn, "INSERT INTO
                      tb_motor(
                      No_plat,
                      Jenis_motor,
                      Tahun_buat,
                      warna,
                      Merk)
                      VALUES(
                      '$no_plat',
                      '$jenis',
                      '$tahun',
                      '$warna',
                      '$merk'
                      )");
    header("location: ".base_url("/view/motor/index.php"));
?>