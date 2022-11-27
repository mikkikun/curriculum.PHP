<?php

  //②フォームからのデータを受け取ります
  $name = $_GET['name'];
  $number = $_GET['number'];
  $hidden_param = $_GET['hidden_param'];

  //③受け取った数字に1~6までのランダムな数字を掛け合わせて
  //変数に入れてください
  $a = $number * mt_rand(1, 6);


  //④掛け合わせた数字の結果によっておみくじを選び、変数に入れます
  if($a <= 10) {
    $b = "吉";
  }elseif ($a <= 15) {
    $b = "小吉";
  }elseif ($a <= 20) {
    $b = "中吉";
  }elseif ($a <= 25) {
    $b = "吉";
  }elseif ($a <= 36) {
    $b = "大吉";
  }else {
    $b = "残念";
  }

  date_default_timezone_set('Asia/Tokyo');
//⑤今日の日付と、名前、番号、おみくじ結果を表示しましょう
  ?>
  <p><?php echo date("Y-m-d H:i:s"); ?></p>
  <p>名前は<?php echo $name; ?>です。</p>
  <p>結果は<?php echo $a; ?>です。</p>
  <p>番号は<?php echo $b; ?>です。</p>