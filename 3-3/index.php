<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practice2</title>
</head>
<body>
  <!-- ①フォームを作成しましょう -->
  <!-- ここにフォームを記述してください -->
  <form action="result.php" method="get">
  好きな名前を入れてください
  <br>
  <input type="text" name="name" />
  <br>
  1~6の中で好きな数字を入れてください
  <br>
  <input type="text" name="number" />
  <br>
  <input type="hidden" name="hidden_param" value="隠しパラメータから" />
  <input type="submit" value="送信" />
</form>
  </form>
</body>
</html>