<link rel="stylesheet" href="all.css">
<?php
// db_connect.phpの読み込み
require_once('db_connect.php');

// function.phpの読み込み
require_once('function.php');

// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();

// PDOのインスタンスを取得
$pdo = db_connect();

try {
  // SQL文の準備
  $sql = "SELECT * FROM books ORDER BY id DESC;";
  // プリペアドステートメントの作成
  $stmt = $pdo->prepare($sql);
  // 実行
  $stmt->execute();
} catch (PDOException $e) {
  // エラーメッセージの出力
  echo 'Error: ' . $e->getMessage();
  // 終了
  die();
}


?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>メイン</title>
</head>
<body>
    <h1>在庫一覧ページ</h1>
    <div class = "submits">
      <form method="post" action="book_post.php"><input type="submit" value="新規登録" class = "submit"/></form>
      <form method="post" action="logout.php"><input type="submit" value="ログアウト" class = "submit3"/></form>
    </div>
    <table>
        <tr>
            <td class = "table-top">タイトル</td>
            <td class = "table-top">発売日</td>
            <td class = "table-top">在庫数</td>
            <td class = "table-top"></td>
        </tr>
        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['stock']; ?></td>
                <td><form method="post" action="delete_books.php?id=<?php echo $row['id']; ?>"><input type="submit" value="削除" class = "submit4"/></form></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>