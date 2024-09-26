<?php
$data = require 'data.php';
$categories = ["Не выбрано"];
foreach ($data as $value) {
    $categories[] = $value['category'];
}
$categories = array_unique($categories);
$category = $_GET['category'] ?? "Не выбрано";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<form action="index.php" method="get">
    <label>
        <select name="category">
            <?php foreach ($categories as $value): ?>
                <option <?php if ($value == $category) echo "selected" ?> value="<?= $value ?>"><?= $value ?></option>
            <?php endforeach; ?>
        </select>
    </label>
    <input type="submit">
</form>
<div class="catalog">
    <?php foreach ($data as $value): ?>
        <?php if (($category == $value['category'] || $category == "Не выбрано")): ?>
            <div class="cart">
                <?= $value["name"] ?>
                <div class="image-container">
                    <?php if (!empty($value['image'])): ?>
                        <img src="<?= $value["image"][0] ?>" alt="<?= $value["name"] ?>" WIDTH="200px">
                    <?php else: ?>
                        <img src="uploads/404.jpg" WIDTH="200px" alt="">
                    <?php endif; ?>
                </div>
                <div class="button">
                    <a href="card.php?id=<?= $value['id'] ?>">Подробнее</a>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>

</div>
</body>
</html>