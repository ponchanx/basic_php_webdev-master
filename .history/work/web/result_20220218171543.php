<?php

/*function.phpにうつした関数を読み込むため。
  index.phpがある一つ上のフォルダのappの中の〜と書いてやれば良い。
  また、function.phpは読み込みを失敗したら処理を止めて欲しいので、reqire。
*/  
require('../app/functions.php');

$message = trim(filter_input(INPUT_POST, 'message'));
$message = $message !== '' ? $message : '...';

$filename = '../app/messages.txt';
$fp = fopen($filename, 'a');
fwrite($fp, $message . "\n");
fclose($fp);


/*フォームから送信された値を受け取って$messageに代入。
その上で、今回はGET形式で受け取る。
また、trimは前後の空白を除去できる*/
// $message = trim(filter_input(INPUT_GET, 'message'));
// $message = $message !== '' ? $message : '...';

// $colors = filter_input(INPUT_GET, 'colors', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);

// $colors = empty($colors) ? 'None selected' : implode('.', $colors);

//filter_inputがnullだった場合はNoneにしたい表現。よく使う。
// $colorFromget = filter_input(INPUT_GET, 'color') ?? 'transparent';

/*heder.phpの方は読み込みに失敗しても処理を止めるほどではないので、include。*/
include('../app/_parts/_header.php');

?>

<!-- <p><?= h($message); ?></p> -->
<!-- <p><?= nl2br(h($message)); ?></p> -->
<!-- <p><?= h($colorFromget); ?></p> -->

<p
<p><a href="index.php">Go back</a></p>

<?php

include('../app/_parts/_footer.php');