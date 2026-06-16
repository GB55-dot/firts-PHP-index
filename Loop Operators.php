<?php
  // Цикл for
    #for($i = 100; $i >= 10; $i += 10) 
    #echo "El: $i<br>";
  
// Цикл while
#$i = 0;
// $isHasCar = true;
#while($i < 10) 
  // $isHasCar = false;
  #echo "El: $i<br>";
  #$i++;
  
  // Цикл do while
  #$i = 100;
  #do {
   #echo "El: $i<br>";
    #$i++;

// оператори в циклах
for($el = 100; $el > 10; $el /= 2) {
    if($el <= 15) {
        break; // вихід з циклу
    }

    if($el % 2 == 0) {
        continue; // пропуск ітерації
    }

    echo "El: $el<br>";
}

// Робота з масивами 
  $list = [1, 2, 3, 4, 5, 6, 7, 8, 9];

  for($i = 0; $i < count($list); $i++)
    echo "Element $i: $list[$i]<br>";
  
  // Робота з асоціативними масивами
  $list = ["age" => 50, "name" => "Alex", "hobby" => "Football"];
  $list2 = [9, 7, 9, 10];
  foreach($list as $key => $item) {
    echo "Key: $key, Item: $item<br>";
  }
  foreach($list2 as $key => $item) {
    echo "Key: $key, Item: $item<br>";
  }
?>