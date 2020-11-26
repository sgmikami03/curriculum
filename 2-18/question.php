<?php
  session_start();
  $_SESSION['name'] = $_POST['name'];
  $q1 = [80,22,20,21];
  $q2 = ['PHP','Python','JAVA','HTML'];
  $q3 = ['join','select','insert','update'];
 ?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>お疲れ様です<?php echo $_SESSION['name']; ?>さん</p>
    <form class="" action="answer.php" method="post">
     <h2>①ネットワークのポート番号は何番？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
     <?php foreach($q1 as $k=>$n): ?>
       <input type="radio" name="q1" value="<?php echo $k; ?>">
       <?php echo $n; ?>
     <?php endforeach; ?>
     <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach($q2 as $k=>$n): ?>
      <input type="radio" name="q2" value="<?php echo $k; ?>">
      <?php echo $n; ?>
    <?php endforeach; ?>
     <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach($q3 as $k=>$n): ?>
      <input type="radio" name="q3" value="<?php echo $k; ?>">
      <?php echo $n; ?>
    <?php endforeach; ?>
    <br>
    <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
    <input type="submit" value="回答する">
    </form>
  </body>
</html>
