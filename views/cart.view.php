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
    <div class="flex justify-center items-center">


        <div class="bg-red-300 w-2xl mt-5 p-5">
            <h1 class="flex justify-center items-center text-white text-2xl font-bold ">
                CART ITEMS
            </h1>
            <div class="flex justify-between mt-2">
                <div class="w-1/8  flex">
                    <img src="https://tailwindui.com/plus-assets/img/ecommerce-images/category-page-04-image-card-01.jpg"
                        alt="">
                    <labe class="mt-7 ml-5">Product name</label>
                </div>


                <label class="mt-7">Count: 2</label>
                <label class="mt-7">Price: 50$</label>
                <div class="mt-7">
                    <button class="bg-red-900 text-white px-2 rounded-full">-</button>
                    <button class="bg-red-900 text-white px-2 rounded-full">+</button>
                    <button class="bg-red-900 text-white px-2">Remove</button>
                </div>

            </div>


            <div>
                <button class="bg-sky-500 text-white w-full mt-16 p-4 rounded-full">Checkout</button>
            </div>
</body>

</html>