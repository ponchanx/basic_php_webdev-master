<?php

/*function.phpにうつした関数を読み込むため。
  index.phpがある一つ上のフォルダのappの中の〜と書いてやれば良い。
*/  
require('../app/functions.php');

$name = [
  'Saito', 
  'Jiro', 
  'Saburo'
]

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP Practice</title>
</head>
<body>
  <ul>
  <?php foreach ($names as $name) { ?>
    <li><?= h($name)</li>
  <?php } ?>
  </ul>
</body>
</html>