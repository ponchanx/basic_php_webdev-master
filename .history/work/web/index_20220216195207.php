<?php

/*function.phpにうつした関数を読み込むため。
  index.phpがある一つ上のフォルダのappの中の〜と書いてやれば良い。
*/  
require('../app/functions.php');

$names = [
  'Saito', 
  'Jiro', 
  'Saburo',
];

?>


  <ul>
  <?php if (empty($names)): ?>
    <li>Nobody!</li>
  <?php  else: ?>
  <?php foreach ($names as $name) : ?>
    <li><?= h($name); ?></li>
  <?php endforeach; ?>
  <?php endif; ?>
  </ul>
