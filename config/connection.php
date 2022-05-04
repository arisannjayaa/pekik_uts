<?php
    
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "db_rent_bike";

    $conn = mysqli_connect(
                    $host,
                    $user,
                    $pass,
                    $db);
    
    if (!$conn) {
        echo mysqli_errno($conn);
    }

    function base_url($url = null) {
        $base_url = "https://localhost/pekik_uts";
        if($url != null) {
            return $base_url."/".$url;
        }else {
            return $base_url;
        }
    }
?>