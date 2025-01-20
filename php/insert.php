<?php 
include('connect.php');

$fname = $_GET['fname'];
$lname = $_GET['lname'];
$email = $_GET['email'];
$message = $_GET['message'];

$insert = mysqli_query($connect, "INSERT INTO form (fname, lname, email, message) VALUES ('$fname', '$lname', '$email', '$message')");

header('location:../pages/contact.php');
exit();
?>