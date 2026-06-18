<?php
$title = "Contacts";
include_once "block/header.php";

if(isset($_SESSION['username'])) $username = $_SESSION['username'];
else $username = "";

if(isset($_SESSION['email'])) $email = $_SESSION['email'];
else $email = "";

if(isset($_SESSION['subject'])) $subject = $_SESSION['subject'];
else $subject = "";

if(isset($_SESSION['message'])) $message = $_SESSION['message'];
else $message = "";

if(isset($_SESSION['error_username'])) $error_username = $_SESSION['error_username'];
else $error_username = "";

if(isset($_SESSION['error_email'])) $error_email = $_SESSION['error_email'];
else $error_email = "";

if(isset($_SESSION['error_subject'])) $error_subject = $_SESSION['error_subject'];
else $error_subject = "";

if(isset($_SESSION['error_message'])) $error_message = $_SESSION['error_message'];
else $error_message = "";

if(isset($_SESSION['success_mail'])) $success_mail = $_SESSION['success_mail'];
else $success_mail = "";
?>
<h1><?=$title?>?></h1>
<div class="text-success"><?=$success_mail?></div>
<form action="check_contact.php" method="post>
   <input tyle="text" name="username" value="<?=$username?>" ?> placeholder="Введіть ім'я" class="form-control"<br>
   <div class="text_danger"><?$error_username?></div>
   <input tyle="email" name="email" value="<?=$email?>" placeholder="Введіть email" class="form-control"<br>
   <div class="text_danger"><?$error_email?></div>
   <input tyle="text" name="subject" value="<?=$subject?>" placeholder="Введіть тему" class="form-control"<br>
   <div class="text_danger"><?$error_subject?></div>
   <textarea name="message"  placeholder="Введіть повідомлення" class="form-control"><?=$message?></textarea><br>
   <div class="text_danger"><?$error_message?></div>
   <button type="submit" class="btn btn-success">Надіслати</button>
</form>
<?php
require_once "block/footer.php";
?>