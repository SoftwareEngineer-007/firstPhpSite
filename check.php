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