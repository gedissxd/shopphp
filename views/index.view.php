<!doctype html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="bg-white">
  <?php require 'components/navbar.php'; ?>
  <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8 p-16">
    <?php foreach ($productList as $product): ?>
      <?php require 'components/card.php'; ?>
    <?php endforeach; ?>
  </div>
</body>

</html>