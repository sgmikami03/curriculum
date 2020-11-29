<?php
require_once('db_connect.php');
session_start();


if (isset($_POST['login'])) {
  echo "a";
    if (empty($_POST["name"])) {
        echo "名前が未入力です。";
    }
    if (empty($_POST["password"])) {
        echo "パスワードが未入力です。";
    }

    if (!empty($_POST["name"]) && !empty($_POST["password"])) {
      echo "b";
        $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
        $password = htmlspecialchars($_POST['password'], ENT_QUOTES);
        // ログイン処理開始
        $pdo = db_connect();
        try {
            $sql = "SELECT * FROM users WHERE name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          echo "c";
            if (password_verify($password, $row['password'])) {
              echo "d";
                $_SESSION["user_id"] = $row['id'];
                $_SESSION["user_name"] = $row['name'];
                header("Location: main.php");
                exit;
            } else {
                echo "パスワードに誤りがあります。";
            }
        } else {
            echo "ユーザー名かパスワードに誤りがあります。";
        }
    }
}
 ?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>ログイン画面</title>
  </head>
  <body>
   <div class='wrapper'>
    <div class="header">
      <h2>ログイン画面</h2>
      <div class="button"><p><a href="signUp.php">新規ユーザー登録</a></p></div>
    </div>

    <div class="content">
      <form action="" method="post">
        <input class="text" type="text" name="name" placeholder="ユーザー名"><br>
        <input class="password" type="text" name="password" placeholder="パスワード"><br>
        <input class="submit" type="submit" name="login" id='login' value="ログイン">
      </form>
    </div>
  </div>
  </body>
</html>
