<?php
  $testFile = 'test.txt';
  $contents = 'hello!';

  if (is_writable($testFile)) {
    $fp = fopen($testFile,'w');
    fwrite($fp,$contents);
    fclose($fp);
    echo "完了";
  }else{
    echo "not writable";
    exit();
  }

  echo "<br>";

  $testFile2 = 'test2.txt';
  if (is_readable($testFile2)) {
    $fp = fopen($testFile2, "r");
    while($line = fgets($fp)){
      echo $line.'<br>';
    }
    $fclose($fp);
  }else {
    echo "not readable";
    exit();
  }
 ?>
