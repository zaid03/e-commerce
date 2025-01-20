<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../source/css/header-style.css">
</head>
<body>
<header id="main-header">
        <div class="logo"><a href="../index.php">T store</a></div>
        <nav>
            <ul class="nav-links">
                <li><a href="../index.php">Home</a></li>
                <li><a href="/pages/about.php">About</a></li>
                <li><a href="/pages/contact.php">Contact</a></li>
            </ul>
        </nav>
        <div class="miaw">
            <a href="/pages/cart.php" class="cart-btn">Cart</a>

            <?php if (isset($_SESSION['user_id'])): ?>
            <a href="../pages/disconnect.php" class="log-btn">Déconnexion</a>
            <?php else: ?>
            <a href="/pages/login.php" class="log-btn">Log in</a>
            <?php endif; ?>
        </div>
    </header>
    <header id="second-header">
        <nav class="sub-nav">
                <ul class="nav-categories">
                    <li class="dropdown">
                        <a href="#">Footwear</a>
                        <ul class="dropdown-menu">
                            <li><a href="/pages/trainers.php">Trainers</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Sandals</a></li>
                            <li><a href="#">Boots</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Clothing</a>
                        <ul class="dropdown-menu">
                            <li><a href="/pages/shirts.php">T-Shirts</a></li>
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Hoodies</a></li>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Skirts</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Accessories</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Hats</a></li>
                            <li><a href="/pages/bags.php">Bags</a></li>
                            <li><a href="#">Watches</a></li>
                            <li><a href="#">Belts</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Beauty & Personal Care</a>
                        <ul class="dropdown-menu">
                            <li><a href="/pages/skincare.php">Skincare</a></li>
                            <li><a href="#">Makeup</a></li>
                            <li><a href="#">Hair Care</a></li>
                            <li><a href="#">Fragrances</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            
    </header>
</body>
</html>