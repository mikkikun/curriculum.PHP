<link rel="stylesheet" href="question.css">
<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST['name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
$numbers = [80, 22, 20, 21];
$languages = ["PHP", "Python", "JAVA", "HTML"];
$commands = ["join", "select", "insert", "update"];

//② ①で作成した、配列から正解の選択肢の変数を作成してください
$a = $numbers[0];
$b = $languages[0];
$c = $commands[1];

?>
<p>お疲れ様です<?php echo $name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="post">
<h2>①ネットワークのポート番号は何番？</h2>
<div class ="a">
<?php foreach ($numbers as $value) { ?>
  <input type="radio" name="number" value="<?php echo $value; ?>">
  <?php echo $value;
}
?>
</div>
<h2>②Webページを作成するための言語は？</h2>
<div class ="a">
<?php foreach ($languages as $value) { ?>
  <input type="radio" name="language" value="<?php echo $value; ?>">
  <?php echo $value;
}
?>
</div>
<div class ="a">
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<?php foreach ($commands as $value) { ?>
  <input type="radio" name="command" value="<?php echo $value; ?>">
  <?php echo $value;
}
?>
</div>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<br>
<input type="hidden" name="hidden_number" value="<?php echo $a; ?>">
<input type="hidden" name="hidden_language" value="<?php echo $b; ?>">
<input type="hidden" name="hidden_command" value="<?php echo $c; ?>">
<input type="hidden" name="hidden_name" value="<?php echo $name; ?>">
<input type="submit" value="解答する">
</form>