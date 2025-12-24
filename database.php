<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'wt_estore';

$db_connection = new mysqli($db_host, $db_user, $db_pass, $db_name);
if (!$db_connection){
    die("DB connection failed: " . mysqli_connect_error());
}else{
    echo "database connected successfully";
}
?>