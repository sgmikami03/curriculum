<?php
// セッション開始
session_start();
// セッション変数のクリア
$_SESSION = array();
// セッションクリア
session_destroy();
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>ロウグアウト</title>
  </head>
  <body>
   <div class='wrapper'>
    <div class="header">
      <h2>ログアウトしました</h2>
      <div class="button"><p><a href="login.php">ログインする</a></p></div>
    </div>

  </div>
  </body>
</html>
