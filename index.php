<?php
$title = "Home Page";
require "block/header.php";
?>
<h1>Home Page</h1>
<?php
    // phpinfo();
  // echo '<pre>'.print_r($_SERVER, true). '/<pre>';
  // echo $_SERVER['HTTPS']. '<br>';
  echo $_SERVER['HTTP_HOST'] . ' - ' . $_SERVER['REQUEST_URI']. '<br>';
  echo $_SERVER['HTTP_USER_AGENT'];

  require_once "block/footer.php";
?>