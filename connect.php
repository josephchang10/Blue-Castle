<?php
    $servername = "mysql.cs.nott.ac.uk";
    $username = "psxjz8";
    $password = "502030";
    $dbasename = "psxjz8";

    $conn = new mysqli($servername, $username, $password, $dbasename);
    if($conn->connect_error) {
        die("Connection failed:".$conn->connect_error);
    }
?>