<?php
require "database/database.php";
$productId = 1;

$sql = "SELECT * FROM `cart` WHERE `id` = $productId";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $cartItems = mysqli_fetch_assoc($result);
} else {
    $cartItems = [];
}

require "views/cart.view.php";
require "database/database.php";
