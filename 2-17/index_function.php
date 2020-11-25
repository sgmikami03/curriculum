<?php
  $h = date("H", date());
  if (3<=$h && $h<=11) {
    echo '今'.$h.'時台です<br>';
    echo "こんばんは";
  }elseif (11<$h && $h<=17) {
    echo '今'.$h.'時台です<br>';
    echo "こんにちは";
  }else {
    echo '今'.$h.'時台です<br>';
    echo "こんばんは";
  }
 ?>
