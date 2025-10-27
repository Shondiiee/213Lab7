<?php
function average($scores){
  if(empty($scores)){
    return 0;
  }
  return array_sum($scores)/ count($scores);
}
