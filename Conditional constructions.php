<?php
  $a = 6;
  $str = "Hello, World!";
  $hasDog = true;
  if($str != "Some" || $hasDog == true) {
    echo 'Yes, the string is not "Some"';
    if($a > 2) 
        echo 'Num is bigger than 2';
  } else if($str == "Hello")
        echo 'Yes, the string is "Hello"';
  else {
    echo 'Else';
  }
?>