<?php

//よく使うため短い関数にしてあげる。今回はh
function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

/*phpではhtmlに値を埋め込む時には、悪意のページに飛ばされたりのないように
　htmlのタグとして解釈されないように文字実体参照に変換する必要がある。
 htmlspcialchars()を使う。すとただの文字列として表示される
*/

function cereateToken()
{
  if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32)
  }
}
