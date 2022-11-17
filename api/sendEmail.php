<?php

    // S E N D   E - M A I L   S C R I P T


    // Tell PHP this file is site
    define('site', true); 

    // Start and check session if e-mail has been sent already
    session_start();

    if(isset($_SESSION['email_sent']))
    {
        echo json_encode(['success' => false, 'msg' => 'Wysłano już e-mail!']);
        exit();
    }


    // Initialize fields
    $fields = [
        'fullname',
        'email',
        'title',
        'message',
        'fullname'
    ];

    // Check fields
    foreach($fields as $field)
    {
        if(!isset($_POST[$field]) || $field == '' || gettype($field) != 'string')
        {
            echo json_encode(['success' => false, 'msg' => 'Niepoprawnie przesłane dane!']);
            exit();
        }
    }

    // Check e-mail
    $emailSplitted = explode("@", $_POST['email']);

    if(sizeof($emailSplitted) != 2)
    {
        echo json_encode(['success' => false, 'msg' => 'Niepoprawnie przesłane dane!']);
        exit();
    }

    if($emailSplitted[0] == '')
    {
        echo json_encode(['success' => false, 'msg' => 'Niepoprawnie przesłane dane!']);
        exit();
    }

    $emailSplitted = explode(".", $emailSplitted[1]);

    if(sizeof($emailSplitted) < 2)
    {
        echo json_encode(['success' => false, 'msg' => 'Niepoprawnie przesłane dane!']);
        exit();
    }

    foreach($emailSplitted as $partOfEmail)
    {
        if($partOfEmail == "")
        {
            echo json_encode(['success' => false, 'msg' => 'Niepoprawnie przesłane dane!']);
            exit();
        }
    }


    $config = require_once __DIR__.'/../config.php';


    $to = $config['email'];
    $subject = $_POST['title'];
    $msg = $_POST['fullname']." napisał:\r\n\r\n".$_POST['message'];
    $headers = "From: {$config['email']}" . "\r\n" .
    "Reply-To: {$_POST['email']}\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $msg, $headers);


    $_SESSION['email_sent'] = true;
    echo json_encode(['success' => true, 'msg' => 'Wysłano e-mail poprawnie!']);
    exit();