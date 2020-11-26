<?php
  function connect(){
    try {
      $x = new PDO('mysql:dbname=checktest4;host=localhost;charset=utf8','root','root');
      return $x;
    } catch (PDOException $e) {
      echo "接続時エラー：".$e->getMessage();
    }

  }
 ?>
