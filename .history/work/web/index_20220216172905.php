<?php

/*phpではhtmlに値を埋め込む時には、悪意のページに飛ばされたりのないように
　htmlのタグ
$name = 'saito <script>alert(1);</script>';

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP Practice</title>
</head>
<body>
  <p>Hello, <?= $name;?>!</p>
  
</body>
</html>