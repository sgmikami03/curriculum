<?php
  echo "23/3の出力<br>";/*誕生日にちなんでいます*/
  echo 'ceil:'.ceil(23/3).',floor:'.floor(23/3).',round:'.round(23/3).'<br>';
  $x = mt_rand(1,10);
  printf('直径%dの円の円周は%dです。<br>',$x,$x*pi());
  $str = 'My name is Sosuke.';
  echo "本文:".$str.'<br>';
  echo "文字数:".strlen($str).'<br>';
  echo "sが最初に出るのは、何文字目:".strpos($str,'s').'<br>';
  echo "名前:".substr($str,-7,6).'<br>';
  echo "名前だけ大文字:".str_replace('Sosuke','SOSUKE',$str).'<br>';
 ?>
