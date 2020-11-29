<?php
require('db_connect.php');
$pdo = db_connect();

if (isset($_POST['signUp'])) {
if (!empty($_POST['name']) && !empty($_POST['password'])) {
 try {
  $sql = "INSERT INTO users (name,password) VALUES(:name,:password)";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(':name',$_POST['name']);
  $stmt->bindParam(':password',password_hash($_POST['password'], PASSWORD_DEFAULT));
  $stmt->execute();
  header('Location: login.php');
 } catch (PDOException $e) {
  echo "error:".$e->getMessage();
  die();
 }
}else {
echo "値が入力されていません";
}
}
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>ユーザー登録画面</title>
  </head>
  <body>
   <div class='wrapper'>
    <div class="header">
      <h2>ユーザー登録画面</h2>
    </div>

    <div class="content">
      <form action="" method="post">
        <input class="text" type="text" name="name" placeholder="ユーザー名"><br>
        <input class="text" type="text" name="password" placeholder="パスワード"><br>
        <input class="submit" type="submit" name="signUp" id='signUp' value="新規登録">
      </form>
    </div>
  </div>
  </body>
</html>
