<?php

/*function.phpにうつした関数を読み込むため。
  index.phpがある一つ上のフォルダのappの中の〜と書いてやれば良い。
  また、function.phpは読み込みを失敗したら処理を止めて欲しいので、reqire。
*/  
require('../app/functions.php');


/*heder.phpの方は読み込みに失敗しても処理を止めるほどではないので、include。*/
include('../app/_parts/_header.php');

?>


<form action="result.php" method="get">
  <!-- <input type="text" name="message"> -->
  <!-- 複数行の文字列を送信するtextarea。  -->
  <!-- <textarea name="message"></textarea> -->
 
  <label><input type="radio" name="color" value="orange">Orange</label>
  <label><input type="radio" name="color" value="pink">Pink</label>
  <label><input type="radio" name="color" value="gold">Gold</label>
  <button>Send</button>
  <a href="reset.php"
</form>

<?php

include('../app/_parts/_footer.php');