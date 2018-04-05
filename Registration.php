<?php
require_once('dbconnect.php');    
$uname = mysqli_real_escape_string($connection, $_GET['uname']);
$password = mysqli_real_escape_string($connection, $_GET['password']);

echo "<br>";

$my_query = "";
$my_query = "select * from User where Username = '$uname'";

$result= mysqli_query($connection, $my_query);
if(mysqli_num_rows($result) > 0){
    echo "Sorry! Username already in use please choose a new one";
}
else
{
    $my_query = "INSERT INTO User(Username, Password) VALUES ('$uname','$password')";
    echo "<br";
    $result= mysqli_query($connection, $my_query);
    if($result){
        echo "Account Created";
        
    }
    else{
        echo"Error found cannot create account.";
    }
}
?>