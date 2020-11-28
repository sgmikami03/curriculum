<?php
// db_connect.phpの読み込みFILL_IN
require('db_connect.php');
// POSTで送られていれば処理実行
if (isset($_POST['signUp'])) {
   // nameとpassword両方送られてきたら処理実行
if (!empty($_POST['name']) && !empty($_POST['password'])) {
  $pdo = db_connect();
   // PDOのインスタンスを取得FILL_IN
   try {
   // SQL文の準備 FILL_IN
   $sql = "insert into users (name, password) VALUES (:name, :password)";
   // パスワードをハッシュ化
   $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
   // プリペアドステートメントの作成 FILL_IN
   $x = $pdo->prepare($sql);
   // 値をセット　FILL_IN
   $x->bindParam(':name',$_POST['name']);
   $x->bindParam(':password',$password);
   // 実行 FILL_IN
   $x->execute();
   //　登録完了メッセージ出力
   echo "登録完了";
   }catch (PDOException $e) {
   // エラーメッセージの出力 FILL_IN
   echo 'Error: ' . $e->getMessage();
   // 終了 FILL_IN
   die();
   }
 }
}
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>新規登録</h1>
    <form action="" method="post">
      user:<br>
      <input type="text" name="name" id="name"><br>
      password:<br>
      <input type="password" name="password" id="password"><br>
      <input type="submit" name="signUp" value="submit" id="signUp">
    </form>
  </body>
</html>
