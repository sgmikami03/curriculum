<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>入力</title>
  </head>
  <body>
    <form action="result.php" method="post">
      名前:<input type="text" name="name"><br>
      ご希望商品:
      <input type="radio" name="product" value="A賞">A賞
      <input type="radio" name="product" value="B賞">B賞
      <input type="radio" name="product" value="C賞">C賞
      <br>
      個数:<select name="num">
         <?php for($i=1; $i<=10; $i++): ?>
           <option value="<?php echo $i ?>"><?php echo $i ?></option>
         <?php endfor; ?>
      </select><br>
      <input type='submit' value="申込">
    </form>
  </body>
</html>
