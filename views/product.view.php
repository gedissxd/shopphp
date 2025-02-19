<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="bg-white overflow-y-scroll">
<?php require 'components/navbar.php'; ?>
<div class="flex p-16 ml-20">
    <div class="w-1/4">
    <img src="https://tailwindui.com/plus-assets/img/ecommerce-images/category-page-04-image-card-01.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
    </div>

<div class="ml-20 flex flex-col max-w-xl">
    <h1 class="text-2xl font-bold  text-gray-900">Product</h1>
    <h2 class="mt-2 text-xl text-gray-900">Price: $48</h2>
    <div class="mt-6 space-y-6">
        <p class="text-base text-gray-700">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.
        </p>
        <a class="mt-8 bg-sky-500 p-4 rounded-full" href="cart.php">
            Add to cart
        </a>
    </div>
</div>
</div>

</body>
</html>