<?php
  session_start();
  function check($x){
    $question = [$_POST['q1'],$_POST['q2'],$_POST['q3']];
    $answer = [1,3,1];
    if ($question[$x]==$answer[$x]) {
      echo "<p>正解!!</p>";
    }else {
      echo "<p>残念...</p>";
    }
  }
 ?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
  </head>
  <body>
    <p><?php echo $_SESSION['name']; ?>さんの結果は・・・？</p>
    <p>①の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php check(0); ?>
    <p>②の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php check(1); ?>
    <p>③の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php check(2); ?>
    <?php session_unset(); ?>
  </body>
</html>
