<link rel="stylesheet" href="answer.css">
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$hidden_name = $_POST['hidden_name'];
$number = $_POST['number'];
$language = $_POST['language'];
$command = $_POST['command'];
$a = $_POST['hidden_number'];
$b = $_POST['hidden_language'];
$c = $_POST['hidden_command'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
if ($number == $a) {
  $d = "正解!";
}else {
  $d =  "残念・・・";
}
if ($language == $b) {
  $e = "正解!";
}else {
  $e =  "残念・・・";
}
if ($command == $c) {
  $f = "正解!";
}else {
  $f =  "残念・・・";
}

?>
<p><?php echo $hidden_name;?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php echo $d;?></p>
<p>②の答え</p>
<p><?php echo $e;?></p>
<!--作成した関数を呼び出して結果を表示-->
<p>③の答え</p>
<p><?php echo $f;?></p>
<!--作成した関数を呼び出して結果を表示-->