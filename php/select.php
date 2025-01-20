<?php 
session_start();
include ('connect.php');

$email = $_GET['email'];
$password = $_GET['password'];

$select = mysqli_query($connect, "SELECT * FROM  sign");
while ($info = mysqli_fetch_array($select)){
    if ($email == 'admin@admin' && $password == 'admin'){
        header('Location: ../pages/admin.php');
        exit();
    } else if($email . $password == $info['email'] . $info['password']){
        $_SESSION['user_id'] = $info['id'];
        $_SESSION['user_name'] = $info['name'];
        header('Location: ../index.php');
        exit();
    } else{
        header('Location: ../pages/login.php?error=1');
        exit();
    }
}


?>