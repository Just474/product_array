<?php
$data = require 'data.php';
$product = array_filter($data, function ($item){
    if ($item['id']==(int)$_GET['id']){
    return true;
    }
});
$card = reset($product);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="">
    <style>
    </style>
</head>
<body>
<?php if ($card['publication']==true):?>
<div class="product">
    <img src="<?= $card['image']?>" alt="" height="350px">
    <p><?=$card['name']?></p>
    <p><?= $card['description']?></p>
    <?php else :?>
    <img src="https://ru.hostings.info/upload/images/2021/12/e11044b915dc39afc3004430606bd6d1.jpg" width="100%" alt="">
    </div>
<?php endif; ?>
</body>
</html>
