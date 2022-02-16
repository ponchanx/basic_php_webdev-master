<?php

/*function.phpにうつした関数を読み込むため。
  index.phpがある一つ上のフォルダのappの中の〜と書いてやれば良い
require('../app/functions.php');

$name = 'saito <script>alert(1);</script>';

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP Practice</title>
</head>
<body>
  <p>Hello, <?= h($name); ?>!</p>
  
</body>
</html>