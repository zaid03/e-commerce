
<?php
include('./php/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <link rel="stylesheet" href="./source/css/index-style.css">
    <link rel="icon" href="./source/images/imgimg.jpg" type="image/png">
</head>
<body>
    <?php
    include('./pages/header.php');
    ?>
    <main>
        <section class="hero">
            <h1>Welcome to Terguy's Store</h1>
            <p>Discover amazing products at unbeatable prices!</p>
        </section>
        
        <section class="products">
            <h2>Featured Products</h2>
            <div class="product-list">
                <?php
                $result = mysqli_query($connect, "SELECT * FROM footwear LIMIT 3");
        
                while ($product = mysqli_fetch_assoc($result)) {
                    echo '<div class="product-item">';
                    echo '<img src="source/images/' . $product['image'] . '" alt="' . $product['name'] . '">';
                    echo '<a class = "name" href="./pages/product.php?name=' . urlencode($product['name']) . '">' . $product['name'] . '</a>';
                    echo '<p>' . $product['description'] . '</p>';
                    echo '<p class="price">$' . $product['price'] . '</p>';
                    echo '<a href="/pages/cart.php?add_to_cart=' . $product['id'] . '&product_type=footwear" class="cart">Add to Cart</a>';
                    echo '</div>';
                }
                ?>
            </div>
            <div class="product-list">
                <?php
                $result = mysqli_query($connect, "SELECT * FROM clothing LIMIT 3");
        
                while ($product = mysqli_fetch_assoc($result)) {
                    echo '<div class="product-item">';
                    echo '<img src="source/images/' . $product['image'] . '" alt="' . $product['name'] . '">';
                    echo '<a class = "name" href="./pages/product.php?name=' . urlencode($product['name']) . '">' . $product['name'] . '</a>';
                    echo '<p>' . $product['description'] . '</p>';
                    echo '<p class="price">$' . $product['price'] . '</p>';
                    echo '<a href="/pages/cart.php?add_to_cart=' . $product['id'] . '&product_type=clothing" class="cart">Add to Cart</a>';
                    echo '</div>';
                }
                ?>
            </div>
            <div class="product-list">
                <?php
                $result = mysqli_query($connect, "SELECT * FROM accessories LIMIT 3");
        
                while ($product = mysqli_fetch_assoc($result)) {
                    echo '<div class="product-item">';
                    echo '<img src="source/images/' . $product['image'] . '" alt="' . $product['name'] . '">';
                    echo '<a class = "name" href="./pages/product.php?name=' . urlencode($product['name']) . '">' . $product['name'] . '</a>';
                    echo '<p>' . $product['description'] . '</p>';
                    echo '<p class="price">$' . $product['price'] . '</p>';
                    echo '<a href="/pages/cart.php?add_to_cart=' . $product['id'] . '&product_type=accessories" class="cart">Add to Cart</a>';
                    echo '</div>';
                }
                ?>
            </div>
            <div class="product-list">
                <?php
                $result = mysqli_query($connect, "SELECT * FROM beauty LIMIT 3");
        
                while ($product = mysqli_fetch_assoc($result)) {
                    echo '<div class="product-item">';
                    echo '<img src="source/images/' . $product['image'] . '" alt="' . $product['name'] . '">';
                    echo '<a class = "name" href="./pages/product.php?name=' . urlencode($product['name']) . '">' . $product['name'] . '</a>';
                    echo '<p>' . $product['description'] . '</p>';
                    echo '<p class="price">$' . $product['price'] . '</p>';
                    echo '<a href="/pages/cart.php?add_to_cart=' . $product['id'] . '&product_type=beauty" class="cart">Add to Cart</a>';
                    echo '</div>';
                }
                ?>
            </div>
        </section>
        
    </main>
    <?php 
    include('./pages/footer.php');
    ?>
    <script src="app.js"></script>

</body>
</html>