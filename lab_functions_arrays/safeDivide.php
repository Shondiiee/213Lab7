<?php
function safeDivide($a, $b){
    if($b == 0){
        return "Error";
    }else{
        return $a / $b;
    }
}