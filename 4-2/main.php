<?php
  require('db_connect.php');
  $pdo = db_connect();
  require('function.php');
  check_user_logged_in();

  try {
    $sql = 'SELECT * from books';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  } catch (PDOException $e) {
    echo "error:".$e->getMessage();
    die();
  }

 ?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>在庫一覧画面</title>
  </head>
  <body>
   <div class='wrapper'>
    <div class="header">
      <h2 class="pp">在庫一覧画面</h2><br><br>
      <div class="button" id="add"><p><a href="create.php">新規登録</a></p></div>
      <div class="button" id="logout"><p><a href="logout.php">ログアウト</a></p></div>
    </div>
    <br><br>

    <div class="content">
      <table border="0" border-color="gray">
        <tr>
          <th>タイトル</th>
          <th>発売日</th>
          <th>在庫数</th>
          <th></th>
        </tr>
        <?php while ($value = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
          <tr>
            <td><?php echo $value['title']; ?></td>
            <td><?php echo $value['date']; ?></td>
            <td><?php echo $value['stock']; ?></td>
            <td>
              <div class="btn-delete"><a href="delate.php?id=<?php echo $value['id']; ?>">削除</a></div>
            </td>
          </tr>
        <?php endwhile; ?>
      </table>
    </div>
  </div>
  </body>
</html>
