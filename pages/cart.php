<?php
include('header.php');
include('../php/connect.php');

// Initialize cart if not already set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add to cart functionality
if (isset($_GET['add_to_cart'])) {
    $product_id = $_GET['add_to_cart'];
    $product_type = $_GET['product_type'];  // Assuming you pass product type (e.g., 'footwear', 'clothing', etc.)

    $query = mysqli_query($connect, "SELECT * FROM $product_type WHERE id = $product_id");
    $product = mysqli_fetch_assoc($query);

    // Check if item already in the cart
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]['quantity'] += 1; // Increase quantity
    } else {
        // Add the product to the cart
        $_SESSION['cart'][$product_id] = [
            'name' => $product['name'],
            'price' => $product['price'],
            'quantity' => 1,
            'image' => $product['image']
        ];
    }

    // Redirect to cart page
    header('Location: cart.php');
    exit();
}

// Handle quantity update via POST
if (isset($_POST['update_quantity'])) {
    $product_id = $_POST['product_id'];
    $new_quantity = $_POST['quantity'];
    
    if ($new_quantity > 0) {
        $_SESSION['cart'][$product_id]['quantity'] = $new_quantity;
    }

    header('Location: cart.php');
    exit();
}

// Handle item removal
if (isset($_GET['remove'])) {
    $product_id = $_GET['remove'];
    unset($_SESSION['cart'][$product_id]);
    header('Location: cart.php');
    exit();
}
?>

<main>
    <h1>Your Cart</h1>

    <?php
    if (empty($_SESSION['cart'])) {
        echo "Your cart is empty!";
        exit();
    }

    echo '<form method="POST" action="cart.php">';
    echo '<table>';
    echo '<tr><th>Product</th><th>Price</th><th>Quantity</th><th>Total</th><th>Remove</th></tr>';
    $total = 0;

    foreach ($_SESSION['cart'] as $product_id => $product) {
        echo '<tr>';
        echo '<td>' . $product['name'] . '</td>';
        echo '<td>' . $product['price'] . ' $</td>';
        echo '<td>';
        echo '<input type="number" class="quantity" name="quantity" data-id="' . $product_id . '" value="' . $product['quantity'] . '" min="1">';
        echo '<input type="hidden" name="product_id" value="' . $product_id . '">';
        echo '</td>';
        echo '<td class="total">' . ($product['quantity'] * $product['price']) . ' $</td>';
        echo '<td><a href="cart.php?remove=' . $product_id . '">Remove</a></td>';
        echo '</tr>';
        $total += $product['quantity'] * $product['price'];
    }

    echo '</table>';
    echo '<p>Total: ' . $total . ' $</p>';
    echo '<button type="submit" name="update_quantity">Update Quantity</button>';
    echo '</form>';
    ?>
</main>

<?php
include('footer.php');
?>
