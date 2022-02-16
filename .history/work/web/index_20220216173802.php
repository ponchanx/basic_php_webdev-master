<?php

//よく使うため短い関数にしてあg
function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

/*phpではhtmlに値を埋め込む時には、悪意のページに飛ばされたりのないように
　htmlのタグとして解釈されないように文字実体参照に変換する必要がある。
 htmlspcialchars()を使う。すとただの文字列として表示される
*/
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