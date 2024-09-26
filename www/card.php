<?php
$data = require 'data.php';
$products = array_filter($data, function ($item) {
    if ($item['id']==(int)$_GET['id']){
        return true;
    }
});
$card = reset($products);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Card-Product</title>
    <link rel="stylesheet" href="/styles/card_style.css">
</head>

<body>
<?php if ($card['publication']==true):?>
    <?php if (!empty($card['image'])):?>
        <?php foreach ($card["image"] as $image):?>
            <img src="<?= $image ?>" alt="" height="350px">
        <?php endforeach;?>
    <?php else:?>
        <img src="uploads/404.jpg" alt="">
    <?php endif;?>
    <p><?=$card['name']?></p>
    <p><?= $card['description']?></p>
<?php else :?>
    <img src="/uploads/404.jpg" height="200px" alt="">
<?php  endif; ?>
<div class="button">
    <a href="index.php">Вернуться</a>
</div>
</body>
</html>