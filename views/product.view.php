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
            <img src="<?= $product['image_url'] ?>" alt="<?= $product['name'] ?>"
                class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
        </div>

        <div class="ml-20 flex flex-col max-w-xl">
            <h1 class="text-2xl font-bold  text-gray-900"><?= $product['name'] ?></h1>
            <h2 class="mt-2 text-xl text-gray-900">Price: <?= $product['price'] ?>$</h2>
            <div class="mt-6 space-y-6">
                <p class="text-base text-gray-700">
                    <?= $product['description'] ?>
                </p>
                <form action="cart.php" method="post">
                    <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                    <button class="mt-8 bg-sky-500 p-4 rounded-full" type="submit">
                        Add to cart
                    </button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>