<?php
$data = require "data.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

<h1>Каталог</h1>
    <div class="container">
        <?php foreach ($data as $product):?>
                <?php if ($product['publication']):?>
                <div class="product">
                    <p><?= $product['name']?></p>
                    <div class="image-container">
                        <img src="<?=$product['image']?>" alt="" >
                    </div>
                    <a href="description.php?id=<?= $product['id']?>">Подробнее</a>
            </div>
            <?php endif; ?>
        <?php endforeach;?>
    </div>
</body>
</html>