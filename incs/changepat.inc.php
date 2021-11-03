<?php
function reg_change($urlName, $finP, $reP){
    $str = $urlName;
              $pattern = "/$finP/i";
              return  preg_replace($pattern, $reP, $str) ;
}