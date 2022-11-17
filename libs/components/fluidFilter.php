<?php

    // F L U I D   F I L T E R   C O M P O N E N T


    // Check if user wants to enter file and redirect to unauthorized if true
    if(!defined('site'))
    {
        require_once __DIR__."/../../errors/403.php";
        header('HTTP/1.0 403 Forbidden');
        exit();
    }


    // Import app config if not imported
    if(!isset($config))
    {
        $config = require_once __DIR__.'/../../config.php';
    }

    // Import assets library if not imported
    if(!isset($assets))
    {
        require_once __DIR__.'/../php/assets.php';
    }

?>

<!-- FLUID FILTER -->
<svg style="display: none">
    <defs>
        <filter id="goo">
            <feGaussianBlur in='SourceGraphic' stdDeviation='10' result='blur' />
            <feColorMatrix in='blur' mode='matrix' values='1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 19 -9' result='goo' />
            <feComposite in ='SourceGraphic' in2='goo' operator='atop' />
        </filter>
    </defs>
</svg>
<!-- FLUID FILTER END -->