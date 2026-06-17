<?php
$title = "Home Page";
require "block/header.php";
?>
<h1>Home Page</h1>
<?php
//  $file = fopen('text.txt', "a");
//  fwrite($file, "\n\nHello World!\nSome new text");
//
//  fclose($file);

$filename = 'text.txt';
$file = fopen($filename, 'r');
$content = fread($file, filesize($filename));
echo '<pre>' .$content.'</pre><br>';
fclose($file);

// Додаткові функції
file_put_contents('a.txt', "Example\nHello");

echo file_get_contents('a.txt'.'<br>');

echo file_exists('a.txt'). '<Br>';
rename('a.txt', 'new_name.txt');
unlink('new_name.txt');

echo __FILE__; 
echo fileperms(__FILE__);
// chmod('text.txt');
  require_once "block/footer.php";
?>