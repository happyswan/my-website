<?php

    // S C R O L L   T O   T O P   B U T T O N   C O M P O N E N T


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


    // Require JS scripts
    array_push($jsScripts, [
        'file' => 'scrollToTopBtn'
    ]);

?>

<!-- SCROLL TO TOP -->
<div onclick="scrollToTop()" id="scroll_to_top-btn">
    <i class="fa-solid fa-chevron-up"></i>
</div>
<!-- SCROLL TO TOP END -->