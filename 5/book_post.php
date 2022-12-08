<link rel="stylesheet" href="all.css">
<?php
// db_connect.phpの読み込み
require_once('db_connect.php');

// function.phpの読み込み
require_once('function.php');

// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();
$format_str = '%Y-%m-%d';

// 提出ボタンが押された場合
if (isset($_POST["post"])) {
    // titleとcontentの入力チェック
    if (empty($_POST["title"])) {
        echo 'タイトルが未入力です。';
    } elseif (empty($_POST["date"])) {
        echo '発売日が未入力です。';
    } elseif (!strptime($_POST["date"], $format_str)) {
        echo "⚪︎⚪︎⚪︎⚪︎-⚪︎⚪︎-⚪︎⚪︎の形で半角で年月日の入力してください";
    } elseif ($_POST["stock"] == "0") {
        echo '在庫数が未入力です。';
    } 

    if (!empty($_POST["title"]) && !empty($_POST["date"]) && strptime($_POST["date"], $format_str) && $_POST["stock"] !== "0") {
        // 入力したtitleとcontentを格納
        $title = $_POST["title"];
        $date = $_POST["date"];
        $stock = $_POST["stock"];

        // PDOのインスタンスを取得
        $pdo = db_connect();

        try {
            // SQL文の準備
            $sql = "INSERT INTO books(title, date, stock) VALUES (:title, :date, :stock)";
            // プリペアドステートメントの準備
            $stmt = $pdo->prepare($sql);
            // タイトルをバインド
            $stmt->bindValue(':title', $title);
            // 本文をバインド
            $stmt->bindValue(':date', $date);
            $stmt->bindValue(':stock', $stock);
            // 実行
            $stmt->execute();
            // main.phpにリダイレクト
            header("Location: main.php");
        } catch (PDOException $e) {
            // エラーメッセージの出力
            echo 'Error: ' . $e->getMessage();
            // 終了
            die();
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
    <h1>本　登録画面</h1>
    <form method="POST" action="">
        <input type="text" name="title" id="title" placeholder="タイトル" class = "input"><br>
        <input type="text" name="date" id="content" placeholder="発売日" class = "input"><br>
        <h2>在庫数</h2>
        <select name="stock" class = "pulldown">
            <option value="0">選択してください</option>
            <?php for ($i=1;$i<=100;$i++){ ?><option value="<?php echo $i; ?>"><?php  echo $i; ?></option><?php } ?>
        </select><br>
        <input type="submit" value="登録" id="post" name="post" class = "submit">
    </form>
</body>
</html>