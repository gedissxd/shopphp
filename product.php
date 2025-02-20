<?php
require "database/database.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Add/update cart item
    $_SESSION['cart'][$productId] = [
        'quantity' => $quantity
    ];
}
$productId = $_GET['id'];

$sql = "SELECT * FROM `products_list` WHERE `id` = $productId";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $product = mysqli_fetch_assoc($result);
} else {
    $product = [];
}

$sql = "INSERT INTO `cart` (`product_id`) VALUES ('$productId')";
$result = mysqli_query($conn, $sql);
require "views/product.view.php";