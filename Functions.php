<?php
  //function info($word) {
    #echo "$word<br>"; 
  #}

  #function summary($x, $y) {
    #$res = $x + $y;
    #info($res . '<br>');

    #return $res;
  #}

  #$res1 = summary(10, 20);
  #$res2 = summary(50, 20);
  #info($res1);
  #info($res2);
  #if($res1 > $res2) info($res1);
  #else info($res2);

  // Практични застосування функцій
  function summary($arr) {
    $sum = 0;
    foreach($arr as $value) 
      $sum += $value;
    
    return $sum;
  }

  $list1 = [1, 2, 3, 4, 5];
  $list2 = [10, 20, 30, 40, 50];
  
  $res = summary($list1);
  echo $res. '<br>';
  echo summary($list2);

  // Область видимості змінних
  function info() {
     global $x; // доступ до змінної з глобальної області видимості
     $x = 0;
  }
  
  $x = 10;
  info();
  echo $x . '<br>'; 
  
  // Область видимості змінних в функціях
   function click() {
    static $count = 0;
    $count++; // змінна $count існує тільки в межах функції
    echo $count . '<br>';
   }

   click();
   click();
?>