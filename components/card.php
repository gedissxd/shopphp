<a href="product.php?id=<?= $product['id'] ?>" class="group">
        <img src="<?= $product['image_url'] ?>"
                class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
        <h3 class="mt-4 text-sm text-gray-700"><?= $product['name'] ?></h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$<?= $product['price'] ?></p>
</a>