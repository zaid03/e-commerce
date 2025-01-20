<?php
$host = 'localhost';
$dbname = 'gestion_utilisateurs';
$username = 'root';
$password = 'zaid.123';

$connect = mysqli_connect($host, $username, $password, $dbname);


if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
