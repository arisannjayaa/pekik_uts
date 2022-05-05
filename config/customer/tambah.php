<?php

    include("../connection.php");
    $nama    = $_POST['nama'];
    $alamat  = $_POST['alamat'];
    $jenis   = $_POST['jenis'];
    $telp    = $_POST['telp'];

    mysqli_query($conn, "INSERT INTO
                      tb_customer(
                      Nama_customer,
                      Alamat,
                      Jenis_kelamin,
                      No_telpon)
                      VALUES(
                      '$nama',
                      '$alamat',
                      '$jenis',
                      '$telp'
                      )");
    header("location: ".base_url("/view/customer/index.php"));
?>