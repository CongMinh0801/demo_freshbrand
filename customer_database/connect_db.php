<?php
    $severname = "localhost";
    $username = "root";
    $password ="";
    $dbname = "db_freshbrand";
    //Tao cau lenh ket noi
    $conn = mysqli_connect($severname, $username, $password, $dbname);
    //Kiem tra cau lenh ket noi voi file mysql
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?>