<?php

$host = 'us-cdbr-iron-east-05.cleardb.net';
$username = 'ba97471f656d10';
$password = '37e90f86';
$database_name = 'heroku_89d03e637463650';

$connection = mysqli_connect($host, $username, $password, $database_name);
if(mysqli_connect_errno()):
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
endif;
?>