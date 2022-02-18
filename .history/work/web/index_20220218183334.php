<?php

/*function.phpにうつした関数を読み込むため。
  index.phpがある一つ上のフォルダのappの中の〜と書いてやれば良い。
  また、function.phpは読み込みを失敗したら処理を止めて欲しいので、reqire。
*/  
require('../app/functions.php');

createToken();

define('FILENAME', '../app/messages.txt');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $message = trim(filter_input(INPUT_POST, 'message'));
  $message = $message !== '' ? $message : '...';
  
  $fp = fopen(FILENAME, 'a');
  fwrite($fp, $message . "\n");
  fclose($fp);

  header('Location: http://localhost:8080/result.php');
  exit;

}

$messages = file(FILENAME, FILE_IGNORE_NEW_LINES);

/*heder.phpの方は読み込みに失敗しても処理を止めるほどではないので、include。*/
include('../app/_parts/_header.php');

?>


<!-- <form action="result.php" method="get"> -->
  <!-- <input type="text" name="message"> -->
  <!-- 複数行の文字列を送信するtextarea。  -->
  <!-- <textarea name="message"></textarea> -->

 <ul> 
  <?php foreach ($messages as $message): ?>
    <li><?= h($message); ?></li>
  <?php endforeach; ?>
  </ul>

  <form action="" method="post">
    <input type="text" name="message">
    <button>Post</button>
    <input type="hidden" name="token" value="
  
 </form>

<?php

include('../app/_parts/_footer.php');