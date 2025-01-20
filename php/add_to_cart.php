<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_POST['add_to_cart'])) {
    $product = [
        'id' => $_POST['product_id'],
        'name' => $_POST['product_name'],
        'price' => $_POST['product_price'],
        'image' => $_POST['product_image'],
        'quantity' => 1,
    ];

    $exists = false;
    foreach ($_SESSION['cart'] as &$cart_item) {
        if ($cart_item['id'] == $product['id']) {
            $cart_item['quantity']++;
            $exists = true;
            break;
        }
    }

    if (!$exists) {
        $_SESSION['cart'][] = $product;
    }
}

// Redirect back to the products page
header('Location: ../index.php');
exit();
?>
