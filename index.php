<?php
$title = "Home Page";
require "block/header.php";
?>
<h1>Home Page</h1>
<?php
  date_default_timezone_set('Europe/Kiev');
  // echo date('t F');
  echo date('m-l Час: H:i:s', time() + 1000).'<br>';
  echo time(). '<br>';
  echo date('m-l Час: H:i:s', strtotime('+1 hours - 2 days')).'<br>';
  echo date('m-l Час: H:i:s', strtotime('next Month')).'<br>';

  require_once "block/footer.php";
?>