<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '1324';
    $dbname = 'mydb';

    mysqli_connect($host,$user,$pass,$dbname);
    echo "connect success";