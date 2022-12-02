<?php
require 'getData.php';

$getData = new getData();
$user = $getData->getUserData();
$post = $getData->getPostData();
$first_name = $user['first_name'];
$last_name = $user['last_name'];
$time = $user["last_login"];
if ($value["category_no"] == 1) {
  $num = "食事";
}elseif($value["category_no"] == 2) {
    $num = "旅行";
}else {
    $num = "その他";
}

// foreach($post as $data => $value){
//   echo $data["id"];
//   echo $data["title"];
//   echo $data["category_no"];
//   echo $data["comment"];
//   echo $data["created"];
//   echo '<br>';
// }

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Y&I Group Inc</title>
    </head>
    <body>

      <div class = "header">
        <div class = "logo">
          <img class = "img" src = "1599315827_logo.png" alt="">
        </div>
        <div class = "userinfo">
          <div class = "userinfo-top">
            <div class = "name">ようこそ <?php echo $last_name; ?><?php echo $first_name; ?>さん</div>
          </div>
          <div class = "userinfo-bottom">
            <div class = "time">最終ログイン日：<?php echo $time; ?></div>
          </div>
        </div>
      </div>

      <div class = "main">
        <table>
          <tr class = "line-title">
            <th class = "line-name">記事ID</th>
            <th class = "line-name">タイトル</th>
            <th class = "line-name">カテゴリー</th>
            <th class = "line-name">本文</th>
            <th class = "line-name">投稿日</th>
          </tr>
        <?php foreach($post as $data => $value){ ?>
          <tr class = "lines">
            <th class = "line"><?php echo $value["id"]; ?></th>
            <th class = "line"><?php echo $value["title"]; ?></th>
            <th class = "line"><?php  if ($value["category_no"] == 1) {
                                        echo $num = "食事";
                                      }elseif($value["category_no"] == 2) {
                                        echo  $num = "旅行";
                                      }else {
                                        echo  $num = "その他";
                                      }?></th>
            <th class = "line"><?php echo $value["comment"]; ?></th>
            <th class = "line"><?php echo $value["created"]; ?></th>
        <?php } ?>
          </tr>
        </table>
      </div>
      
      <div class = "footer">
        <div class = "inc">Y&I group.inc</div>
      </div>


    </body>
</html>