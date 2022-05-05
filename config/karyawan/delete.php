<?php
    include("../connection.php");
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM tb_karyawan WHERE Id_karyawan = '$id'");
    header("location: ".base_url("/view/karyawan/index.php"));
?>