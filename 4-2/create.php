<?php
  require('db_connect.php');
  $pdo = db_connect();
  require('function.php');
  check_user_logged_in();

  if (isset($_POST['submit'])) {
   if (!empty($_POST['title']) && !empty($_POST['date']) && !empty($_POST['stock'])) {

   try {
    $sql = "INSERT INTO books (title,date,stock) VALUES(:title,:date,:stock)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':title',$_POST['title']);
    $stmt->bindParam(':date',$_POST['date']);
    $stmt->bindParam(':stock',$_POST['stock']);
    $stmt->execute();
    header('Location: main.php');
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
    <title>本を登録する</title>
  </head>
  <body>
   <div class='wrapper'>
    <div class="header">
      <h2>本　登録画面</h2>
    </div>

    <div class="content">
      <form action="" method="post">
        <input class="text" type="text" name="title" placeholder="タイトル"><br>
        <input class="text" type="text" name="date" placeholder="発売日"><br>
        <p>在庫数</p>
        <select class="select-box"  name="stock" style="width:75px; height:15px;">
         <?php for($i=0; $i<=30; $i++): ?>
          <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php endfor; ?>
        </select>
        <br>
        <input class="submit" type="submit" name="submit" id='submit' value="登録">
      </form>
    </div>
  </div>
  </body>
</html>
