<?php
    session_start();

    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['subject']);
    unset($_SESSION['message']);

    unset($_SESSION['error_username']);
    unset($_SESSION['error_email']);
    unset($_SESSION['error_subject']);
    unset($_SESSION['error_message']);


    function redirect() {
        header('Locatin: contact.php');
        exit;
    }

    $username = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['subject'] = $subject;
    $_SESSION['message'] = $message;

    if(strlen($username) <= 1) {
       $_SESSION['error_username'] = "Введіть коректне ім'я";
       redirect();
    }
    else if(strlen($email) <= 5 || strpos($email, "@") == false) {
       $_SESSION['error_email'] = "Введіть коректне email";
       redirect();
    }
    else if(strlen($email) <= 5) {
       $_SESSION['error_subject'] = "Введіть коректну тему";
       redirect();
    }
    else if(strlen($email) <= 10) {
       $_SESSION['error_message'] = "Введіть коректне повідомлення";
       redirect();
    }
    else {
        $subject = "=?utf-8?B?".base64_encode($subject)."?=";
        $headers = "From: $email\r\nReply-to $email\r\nContect-type: text/plain; charset=utf-8\r\n";
        mail("admin@gmail.com", $subject, $message, $headers);
        $_SESSION['success_mail'] = 'Ви успішно відправили лист';
        redirect();
    }