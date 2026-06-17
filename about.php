<?php
$title = "About Page";
require "block/header.php";
?>
<div class="container">
<h1>About PHP</h1>

<form action="check_get.php" method="get">
    <input type="text" name="username" placeholder="Enter name" class="Form=control">br<
    <input type="email" name="email" placeholder="Enter email" class="Form=control">br<
    <input type="password" name="password" placeholder="Enter password" class="Form=control">br<
    <texarea class="form-control" placeholder="Enter message" name="message"><textarea>
    <input type="submit" value="Send" class="btn btn-success">
  </form>
</div>
<?php
  require "block/footer.php";
?>