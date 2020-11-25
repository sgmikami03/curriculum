<?php
  $i=0;
  while ($a < 40) {
    $x=mt_rand(1,6);
    $a+=$x;
    $i++;
    echo $i."回目=".$x.'<br>';
  }
  echo '合計'.$i.'回でゴールしました';
 ?>
