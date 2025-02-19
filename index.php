<?php
require "database/database.php";


$sql = "SELECT * FROM `products_list`";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $productList = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    $productList = [];
}

require "views/index.view.php";