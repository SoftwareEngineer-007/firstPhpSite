<?php 

    // print_r($_POST);
    $email = $_POST["email"];
    $message = $_POST["message"];

    $error = '';
    if(trim($email) == '')
        $error = 'Input your email';
    elseif(trim($message) == '')
        $error = 'Input your message';
    elseif(strlen($message) < 10)
        $error = 'The message must be more than 10 characters';


    if($error != '') {
        echo $error;
        exit;
    }

    $subject = "=?utf-8?B?".base64_encode("Test message")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

    mail('admin@suncho.ru', $subject, $message, $headers);

    header('Location: /about.php');