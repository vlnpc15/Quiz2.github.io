<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'cookies';
    $connection = mysqli_connect($host, $username, $password, $database);
    if (mysqli_connect_errno()) {
        echo 'Database tidak bisa dijangkau '.mysqli_connect_error();
    }
?>