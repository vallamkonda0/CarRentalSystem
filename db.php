<?php
    $host = "us-cdbr-east-06.cleardb.net";
    $user = "b4f8f97a12a570";
    $pass = "e1692e62";
    $name = "heroku_7af4034455cfe47";
    #$con = mysqli_connect("127.0.0.1","root","","crs");
    $con = mysqli_connect($host, $user, $pass, $name);
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>