<?php
  //商品の税込価格を計算しましょう
  //①税率を定数TAXで作成しましょう。消費税は10%とします。
  define("TAXT", 1.1);

  //②商品の情報を連想配列に入れましょう。
  $products = ["鉛筆" => 100, "消しゴム" => 150, "物差し" => 500];
  $a = $products["鉛筆"];
  $b = $products["消しゴム"];
  $c = $products["物差し"];


  //③税率を計算する関数を用意します。
  //引数には値段を受け取り、税込価格を返答します。
  function money($d) {
    return $d * TAXT;
  }

  $e = money($a);
  $f = money($b);
  $g = money($c);
  $products = ["鉛筆" => $e, "消しゴム" => $f, "物差し" => $g];


  //④繰り返し文を使って画面に指定の文字を表示しましょう！
  foreach ($products as $key => $value) {
    echo $key;
    echo "の税込み価格は";
    echo $value;
    echo "です";
    echo "<br />";
  } 
  ?>