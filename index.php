<?php
$title = "Home Page";
require "block/header.php";
?>
<h1>Home Page</h1>
<?php
// Cookie
  $user_name = 'Alex';
  // setcookie("user_name", $user_name, time() + 180);
  // setcookie("user_name", $user_name, time() - 180);
  print_r($_COOKIE);

  echo '<br>'.$_COOKIE['user_name'].'<br>';

  // Session

   $_SESSION['user_name'] = $user_name;
   print_r($_SESSION);
   echo '<br>'.$_SESSION['user_name']. '<br>';

   unset($_SESSION['user_name']);
  session_destroy();
  
   if($_SESSION['user_name'] == 'Alex') {
    echo "Admin";
   }

require_once "block/footer.php";
?>