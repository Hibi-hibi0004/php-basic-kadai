<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎</title>
</head>
<body>

<p>
  <?php
  $product_datas = ['名前' => '玉ねぎ','値段' => '200','産地' => '北海道'];

  foreach($product_datas as $index => $value){
    echo "{$index} : {$value}<br>";
  }

  ?>
</p>
  
</body>
</html>