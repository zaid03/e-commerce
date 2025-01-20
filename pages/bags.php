<?php
include('../php/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bags</title>
    <link rel="stylesheet" href="../source/css/index-style.css">
    <link rel="icon" href="../source/images/imgimg.jpg" type="image/png">
</head>
<body>
    <?php
    include('header.php');
    ?>
        <section class="products">
            <h2>Our Bags</h2>
            <div class="product-list">
                <?php
                $result = mysqli_query($connect, "SELECT * FROM accessories WHERE type = 'bag'");
                while ($product = mysqli_fetch_assoc($result)) {
                    echo '<div class="product-item">';
                    echo '<img src="../source/images/' . $product['image'] . '" alt="' . $product['name'] . '">';
                    echo '<a href="product.php?name=' . urlencode($product['name']) . '">' . $product['name'] . '</a>';
                    echo '<p>' . $product['description'] . '</p>';
                    echo '<p class="price">$' . $product['price'] . '</p>';
                    echo '<button class="add-to-cart">Add to Cart</button>';
                    echo '</div>';
                }
                ?>
            </div>
        </section>
    <?php
    include('footer.php');
    ?>
</body>
</html>