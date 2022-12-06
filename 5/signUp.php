<link rel="stylesheet" href="all.css">
<?php

// db_connect.phpの読み込みFILL_IN
require_once('db_connect.php');
$errorMessage = "";
$signUpMessage = "";
// POSTで送られていれば処理実行
if (isset($_POST["signUp"])) {
  if (empty($_POST["name"])) {
    $errorMessage = 'ユーザーIDが未入力です。';
  } else if (empty($_POST["password"])) {
    $errorMessage = 'パスワードが未入力です。';
  }
// nameとpassword両方送られてきたら処理実行
  if (!empty($_POST["name"]) && !empty($_POST["password"])){
    $name = $_POST["name"];
    $password = $_POST["password"];
    
// PDOのインスタンスを取得FILL_IN
    $pdo = db_connect();
    try {
// SQL文の準備 FILL_IN 
      $sql = "INSERT INTO users(name, password) VALUES (:name, :password)";
// パスワードをハッシュ化
      $password_hash = password_hash($password, PASSWORD_DEFAULT);
// プリペアドステートメントの作成 FILL_IN 
      $stmt = $pdo->prepare($sql);
// 値をセット　FILL_IN
      $stmt->bindValue(':name', $name);
      $stmt->bindValue(':password', $password_hash);
// 実行 FILL_IN
      $id = $pdo->lastinsertid();
      $stmt->execute();
//　登録完了メッセージ出力
      header("Location: login.php");
    }catch (PDOException $e) {
// エラーメッセージの出力 FILL_IN 
      $errorMessage = 'データベースエラー';
// 終了 FILL_IN
    }
  }
}
?>



<!DOCTYPE html>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<div><font color="#ff0000"><?php echo htmlspecialchars($errorMessage, ENT_QUOTES); ?></font></div>
<div><font color="#0000ff"><?php echo htmlspecialchars($signUpMessage, ENT_QUOTES); ?></font></div>
<h1>ユーザー登録画面</h1>
<form method="POST" action="">
<input type="text" name="name" id="name" placeholder="ユーザー名" class = "input">
<br>
<input type="password" name="password" id="password" placeholder="パスワード" class = "input"><br>
<input type="submit" value="新規登録" id="signUp" name="signUp" class = "submit">

</form>
</body>
</html>