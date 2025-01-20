<?php 
    include ('../php/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signing up page</title>
    <link rel="stylesheet" href="../source/css/login.css">
</head>
<body>
    <div class="form-container">
        <form action="/php/insert_sign.php" method="get">
            <h2>Sign up</h2>
            <input type="text" name="name" placeholder="Full name">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Sign up</button>
        </form>
        <p>Already have an account? <a href="/pages/login.php">Log in</a></p>
    </div>
</body>
</html>

