<?php

    // N A V B A R   C O M P O N E N T


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

<!-- NAVBAR -->
<nav id="navbar">
    <!-- Logo -->
    <a href="#" class="item" style="float: left">
        <img src="<?= asset('logo-black.webp') ?>" alt="Logo Krzysztofa Kmieć" />
        <div class="title">rzysztof Kmieć</div>
    </a>
    <!-- Logo end -->

    <!-- Menu -->
    <ul id="menu" class="item nav-link--container" style="float: right">
        <li class="border-link"><a href="#"><i class="mobile-only fa-solid fa-house"></i> Strona główna</a></li>
        <li class="border-link"><a href="#services"><i class="mobile-only fa-solid fa-code"></i> Usługi</a></li>
        <li class="border-link"><a href="#about-me"><i class="mobile-only fa-regular fa-circle-question"></i> O mnie</a></li>
        <li class="border-link"><a href="#portfolio"><i class="mobile-only fa-solid fa-image"></i> Portfolio</a></li>
        <li><a href="#contact"><i class="mobile-only fa-regular fa-envelope"></i> Kontakt <i class="desktop-only fa-regular fa-envelope"></i></a></li>
    </ul>
    <!-- Menu end -->

    <!-- Burger -->
    <div id="burger-container" class="mobile-only">
        <svg viewBox="0 0 100 80" width="40" height="40">
            <rect class="bar" id="bar-one" width="100" height="15"></rect>
            <rect class="bar" id="bar-two" y="30" width="100" height="15"></rect>
            <rect class="bar" id="bar-three" y="60" width="100" height="15"></rect>
        </svg>
    </div>
    <!-- Burger end -->

    <div style="clear: both"></div>
</nav>
<!-- NAVBAR END -->