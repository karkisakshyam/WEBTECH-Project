<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" & $password == "123"){
    $_SESSION['user'] = 'admin';
    header ("Location: dashboard.php");
}else if ($username == "customer" & $password == "123"){
$_SESSION['user'] = 'customer';
    header ("Location: dashboard.php");
}
else{
    echo "Invalid credentials. Please try again.";
}
?>