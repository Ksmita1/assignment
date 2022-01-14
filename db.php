<?php
    $dbServer = "localhost";
    $dbUsername = "root";
    $dbPassword = "root";
    $dbName = "assignment";

    $conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);
    mysqli_query($conn, "INSERT INTO webpage values('$main_url', '$title', '$description', '$_POST[crawl]')");
?>