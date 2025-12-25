<?php
require "database.php";

session_start(); // Must be at the very top

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';




$hashed_password = password_hash($password,PASSWORD_DEFAULT);


$query = "select count(*) from users where email = '$email' and password = '$hashed_password'";

$res = mysqli_query($db_connection, $query);

if ($username === "admin" && $password === "123") {

    $_SESSION['user'] = 'admin';

    header("Location: dashboard.php");
    exit;

} elseif ($username === "customer" && $password === "123") {

    $_SESSION['user'] = 'customer';
    header("Location: dashboard.php");
    exit;

} else {

    echo "Invalid credentials. Please try again.";
}
?>