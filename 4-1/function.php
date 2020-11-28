<?php
// function.php
/**
 * $_SESSION["user_name"]が空だった場合、ログインページにリダイレクトする
 * @return void
 */
function check_user_logged_in() {
    // セッション開始
    session_start();
    // セッションにuser_nameの値がなければlogin.phpにリダイレクト
    if (empty($_SESSION["user_name"])) {
        header("Location: login.php");
        exit;
    }
}

function redirect_main_unless_parameter($x){
  if (empty($x)) {
    header('Location: main.php');
  }
}

function find_post_by_id($id){
  $pdo = db_connect();

  try {
      // SQL文の準備
      $sql = 'SELECT * from posts where id = :id';
      // プリペアドステートメントの作成
      $stmt = $pdo->prepare($sql);
      // idのバインド
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
      // エラーメッセージの出力
      echo 'Error: ' . $e->getMessage();
      // 終了
      die();
  }
}
?>
