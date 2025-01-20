<?php
session_start();
?>

<?php 
    include ('../php/connect.php');
    $error = isset($_GET['error']) ? $_GET['error'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="../source/css/login.css">
</head>
<body>
    <div class="form-container">
        <form action="../php/select.php" method="get">
            <h2>Login</h2>
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="/pages/signup.php">Sign up</a></p>
        <?php if($error == '1'): ?>
            <p style="color: red;">Invalid email or password</p>
        <?php endif; ?>
        <p id="error-message" style="color: red; display: none;"></p>
    </div>
    <script href="/js/script.js"></script>
</body>
</html>

