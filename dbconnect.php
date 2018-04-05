<?php

$host = 'localhost';
$username = 'root';
$password = 'root';
$database_name = 'UserInfo';

$connection = mysqli_connect($host, $username, $password, $database_name);
if(mysqli_connect_errno()):
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
endif;
?>