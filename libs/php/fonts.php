<?php

    // F O N T S   G L O B A L   L I B R A R Y

    // Contains global fonts

    
    // Check if user wants to enter file and redirect to unauthorized if true
    if(!defined('site'))
    {
        require_once __DIR__."/../../errors/403.php";
        header('HTTP/1.0 403 Forbidden');
        exit();
    }

?>


<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/931987ae8d.js" crossorigin="anonymous"></script>


<!-- Kanit -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">