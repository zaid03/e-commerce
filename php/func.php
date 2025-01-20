<?php
include('connect.php');
$product_name = mysqli_real_escape_string($connect, $_GET['name']);
$result1 = mysqli_query($connect, "SELECT * FROM footwear WHERE name = '$product_name'");
$result2 = mysqli_query($connect, "SELECT * FROM clothing WHERE name = '$product_name'");
$result3 = mysqli_query($connect, "SELECT * FROM accessories WHERE name = '$product_name'");
$result4 = mysqli_query($connect, "SELECT * FROM beauty WHERE name = '$product_name'");
?>