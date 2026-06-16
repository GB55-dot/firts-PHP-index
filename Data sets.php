<?php
  $nums = array(4, 7, 4, 8, 9, 0, 10);
  $nums[0] = 45;
  echo $nums[0] . '<br>';

  $arr = [0, 0.45, "Hello", true, 5, [0, 7]];
  $arr[1] = "World";
  echo $arr[1] . '<br>';

  $user = ["age" =>50, "name" => "Alex", "hobby" => "Football"];
  echo $user["age"] . '<br>';

  $matrix = [
    [3, 9],
    ['Hello', true, [0,6, 8]]
  ];
  echo $matrix[1][2][1] . '<br>';
?>