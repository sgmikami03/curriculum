<?php
  function volume($x,$y,$z){
    $v=$x*$y*$z;
    echo '縦='.$x.'cm、横='.$y.'cm、高さ='.$z.'cmの直方体の体積は'.$v.'cm^3です';
  }
  volume(5,10,8);
 ?>
