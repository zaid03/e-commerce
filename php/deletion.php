<?php 
include ('connect.php');

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = mysqli_query($connect, "DELETE FROM sign WHERE id = '$id'");
    if ($delete){
        header('Location: ../pages/admin.php');
        exit();
    }else {
        echo 'Error deleting user';
    }
}
?>