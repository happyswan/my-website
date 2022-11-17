<?php

    // B A N N E R   C O M P O N E N T


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

<!-- BANNER -->
<section id="banner">

    <!-- Background -->
    <div class="img-bg" style="filter: brightness(.5)">
        <img src="<?= asset('programming-background3.webp') ?>" alt="Tło programowanie" loading="lazy" />
    </div>
    <!-- Background end -->

    <!-- Logo -->
    <img class="banner-logo" src="<?= asset('logo-black.webp') ?>" alt="Logo Krzysztofa Kmiecia" loading="lazy" />
    <!-- Logo end -->

    <!-- Fluid animation -->
    <canvas id="fluid"></canvas>
    <!-- Fluid animation end -->

    <!-- Page title -->
    <div class="site-title--container">
        <p>Witaj, nazywam się Krzysztof:</p>

        <h1>Jestem programistą full stack tworzącym<br>aplikacje webowe i mobilne</h1>

        <a href="#services" class="more-btn--link">
            <p>Sprawdź usługi</p>
            <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div>
    <!-- Page title end -->
</section>
<!-- BANNER END -->