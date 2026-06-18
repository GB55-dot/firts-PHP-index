<?php
if(isset($_GET['?_ijt'])) {
    $link = explode("?_ijt", $_SERVER['REQUEST_URI']);
    $redirect = "http://".$_SERVER['HTTP_HOST'].$link[0];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: '.$redirect);
    exit;
  }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <style>
        body {
            background: #333;
            color: #fff;
            margin: 20px;
        }
    </style>
</head>
<body>
<header>
    <a hred='index.php'>Home</a> | <a href='about.php'>About</a> | <a href='contact.php'>Contact us</a>
</header>