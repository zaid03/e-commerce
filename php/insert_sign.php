<?php 
include('connect.php');

$name = $_GET['name'];
$email = $_GET['email'];
$password = $_GET['password'];

$insert = mysqli_query($connect, "INSERT INTO sign (name, email, password) VALUES ('$name', '$email', '$password')");

header('location:../pages/login.php');
exit();
?>