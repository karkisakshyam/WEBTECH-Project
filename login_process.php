<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" & $password == "123"){
    header ("Location: welcome.php");
}else{
    echo "Invalid credentials. Please try again.";
}
?>