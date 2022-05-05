<?php
    include("../connection.php");
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM tb_motor WHERE Id_motor = '$id'");
    header("location: ".base_url("/view/motor/index.php"));
?>