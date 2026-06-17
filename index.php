<?php
$title = "Home Page";
require "block/header.php";
?>
<h1>Home Page</h1>
<?php
  $lis = [19, 40, 29, 49];
  unset($lis[1]);
  $lis = array_values($lis);
  rsort($lis);
  shuffle($lis);
  print_r($lis);
  echo '<br>';

  if (in_array(8, $lis))
    echo "Found";
  else
    echo "Not Found";

  echo '<br>';

  $new_list = array_slice($lis, 0, count($lis) - 2);
  print_r($new_list);
  echo '<br>';

  $arr1 = [4, 8, 10];
  $arr2 = [4, 20, 14]; 
  $arr3 = array_merge($arr1, $arr2);
  print_r($arr3);
  echo '<br>';

  // Перевsірка типів даних
  $x = '10';
  echo gettype($x).'<br>';
  echo is_numeric($x).'<br>';
  echo is_integer($x).'<br>';
  
  // Робота з текстом

   $word = "Example";
   echo strpos($word, "xa"), '<br>';

   $words = "john,alex,bob";
   $arr_words = explode(",", $words);
   print_r($arr_words);
   echo '<br>'.implode(" | ", $arr_words);

  require_once "block/footer.php";
?>