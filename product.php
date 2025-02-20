<?php
require "database/database.php";

$productId = $_GET['id'];

$sql = "SELECT * FROM `products_list` WHERE `id` = $productId";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $product = mysqli_fetch_assoc($result);
} else {
    $product = [];
}
require "views/product.view.php";