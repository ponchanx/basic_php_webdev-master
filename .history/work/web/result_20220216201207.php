<?php

/*function.phpにうつした関数を読み込むため。
  index.phpがある一つ上のフォルダのappの中の〜と書いてやれば良い。
  また、function.phpは読み込みを失敗したら処理を止めて欲しいので、reqire。
*/  
require('../app/functions.php');

/*heder.phpの方は読み込みに失敗しても処理を止めるほどではないので、include。*/
include('../app/_parts/_header.php');

?>

<p><?= h($message); ?></p>
<p><a hreh="index.php"></p>

<?php

include('../app/_parts/_footer.php');