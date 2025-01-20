<?php 
echo '<link rel = "stylesheet" href = "../source/css/admin_style.css">';
echo '<a href = "login.php" class = "bozo">Return</a>';

include ('../php/connect.php');

echo '<table border = "1"><tr><td>Id</td><td>Name</td><td>Email</td><td>Password</td><td>N° des commandes</td><td>Deletion</td></tr>';

$select = mysqli_query($connect, "SELECT * FROM sign");
while ($sign = mysqli_fetch_array($select)){
    echo "<tr><td>".$sign['id']."</td><td>".$sign['name']."</td><td>".$sign['email']."</td><td>".$sign['password']."</td><td>".$sign['N° commandes']."</td><td><form action = '../php/deletion.php' method = 'get'><input type = 'submit' value = 'Delete'><input type = 'hidden' name = 'id' value = '".$sign['id']."'></form></td></tr>";
}

echo '</table>';
?>