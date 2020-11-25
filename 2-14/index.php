<?php
  $members = ['kun','yosiko','souta','yutaka'];/*出席した生徒*/
  echo "出席した生徒の人数".count($members).'<br>';
  sort($members);
  var_dump($members);
  echo "<br>";
  $stu = 'yutaka';
  echo $stu.'は出席している?(true or false):';
  $stu_b = var_dump(in_array($stu, $members));
  echo "<br>";
  $atstr = implode(',',$members);
  echo 'みやすく:'.$atstr.'<br>';
  $re_members = explode(",", $atstr);
  echo '配列に戻す:';
  var_dump($re_members);
 ?>
