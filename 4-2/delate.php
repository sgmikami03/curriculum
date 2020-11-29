<?php
  require('db_connect.php');
  $pdo = db_connect();

  if (!(isset($_GET['id']))) {
    header('Location: main.php');
    exit();
  }

  try {
    $sql = "DELETE from books where id = :id ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    header('Location: main.php');
  } catch (PDOException $e) {
    echo "error:".$e->getMessage();
    die();
  }

 ?>
