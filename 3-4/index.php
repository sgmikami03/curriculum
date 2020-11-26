<?php
  require("getData.php");
  $x = new getData();
  $user = $x->getUserData();
  $data = $x->getPostData();
 ?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
  </head>
  <body>
    <div class="header">
      <img src="img/logo.png" alt="">
      <div class="header-right">
        <div class="upper">ようこそ<?php echo $user['last_name'].$user['first_name']; ?>さん</div>
        <div class="lower">最終ログイン日：<?php echo $user['last_login']; ?></div>
      </div>
    </div>
    <div class="contents">
      <table border="1" style=" border-color: #fff">
        <tr>
          <th>記事ID</th><th>タイトル</th><th>カテゴリ</th><th>本文</th><th>投稿日</th>
        </tr>
        <?php foreach ($data as $value): ?>
          <tr>
            <td><?php echo $value['id']; ?></td>
            <td><?php echo $value['title']; ?></td>
            <td><?php if ($value['category_no']==1) {
                        echo "食事";
                      }elseif ($value['category_no']==2) {
                        echo "旅行";
                      }else {
                        echo "その他";
                      } ?></td>
            <td><?php echo $value['comment']; ?></td>
            <td><?php echo $value['created']; ?></td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
    <div class="footer">
      Y&I group.inc
    </div>
  </body>
</html>
