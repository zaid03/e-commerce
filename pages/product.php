<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="../source/css/product-style.css">
    <link rel="icon" href="../source/images/imgimg.jpg" type="image/png">
</head>
<body>
<?php
    include('header.php');
    include('../php/connect.php');
    include('../php/func.php');

    if (isset($_GET['name'])) {
        
        include('../php/func.php');
        $product1 = mysqli_fetch_assoc($result1);
        $product2 = mysqli_fetch_assoc($result2);
        $product3 = mysqli_fetch_assoc($result3);     
        $product4 = mysqli_fetch_assoc($result4);     
    } else {
        echo '<p>Product not found.</p>';

        exit();
    }

    if ($product1) {
        ?>
        <main>
            <section class="product-details">
                <img src="../source/images/<?php echo $product1['image']; ?>" alt="Product Image">


                <div class="details">
                    <h1><?php echo $product1['name']; ?></h1>
                    <p class="price">$<?php echo $product1['price']; ?></p>
                    <p class="description"><?php echo $product1['description']; ?></p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </section>
        </main>
        <?php
    } else if($product2){
        ?>
        <main>
            <section class="product-details">
                <img src="../source/images/<?php echo $product2['image']; ?>" alt="Product Image">


                <div class="details">
                    <h1><?php echo $product2['name']; ?></h1>
                    <p class="price">$<?php echo $product2['price']; ?></p>
                    <p class="description"><?php echo $product2['description']; ?></p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </section>
        </main>
        <?php
    } else if ($product3){
        ?>
        <main>
            <section class="product-details">
                <img src="../source/images/<?php echo $product3['image']; ?>" alt="Product Image">


                <div class="details">
                    <h1><?php echo $product3['name']; ?></h1>
                    <p class="price">$<?php echo $product3['price']; ?></p>
                    <p class="description"><?php echo $product3['description']; ?></p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </section>
        </main>
        <?php
    } else if ($product4){
        ?>
        <main>
            <section class="product-details">
                <img src="../source/images/<?php echo $product4['image']; ?>" alt="Product Image">


                <div class="details">
                    <h1><?php echo $product4['name']; ?></h1>
                    <p class="price">$<?php echo $product4['price']; ?></p>
                    <p class="description"><?php echo $product4['description']; ?></p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </section>
        </main>
        <?php
    }else{

        echo '<p>error.</p>';
    }

    include('footer.php');
?>

</body>
</html>