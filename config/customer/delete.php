<?php
    include("../connection.php");
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM tb_customer WHERE Id_customer = '$id'");
    header("location: ".base_url("/view/customer/index.php"));
?>