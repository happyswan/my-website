<?php

    // F O O T E R   C O M P O N E N T


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

<!-- FOOTER -->
<footer>
    <div class="content">
        <!-- Column of links -->
        <div class="item">
            <ul class="nav-link--container">
                <li><a href="#"><i style="margin-right: .1rem;" class="fa-solid fa-house"></i> Strona główna</a></li>
                <li><a href="#services"><i class="fa-solid fa-code"></i> Usługi</a></li>
                <li><a href="#about-me"><i style="margin-left: .1rem; margin-right: .2rem;" class="fa-regular fa-circle-question"></i> O mnie</a></li>
                <li><a href="#portfolio"><i style="margin-left: .1rem; margin-right: .2rem;" class="fa-solid fa-image"></i> Portfolio</a></li>
                <li><a href="#contact"><i style="margin-left: .1rem; margin-right: .2rem;" class="fa-regular fa-envelope"></i> Kontakt</a></li>
            </ul>
        </div>
        <!-- Column of links end -->
        
        <!-- Column of links -->
        <div class="item">
            <ul class="nav-link--container">
                <li><a href="mailto: <?= $config['email'] ?>"><i class="fa-regular fa-envelope"></i> &nbsp;<?= $config['email'] ?></a></li>
                <li><a href="tel: +48<?= str_replace(" ", "", $config['phone']) ?>"><i style="margin-left: .1rem; margin-right: .2rem;" class="fa-solid fa-mobile-screen-button"></i> &nbsp;( +48 ) <?= $config['phone'] ?></a></li>
            </ul>
        </div>
        <!-- Column of links end -->
        
        <!-- Column of logo -->
        <a href="#" class="item">
            <img src="<?= asset('logo-black.webp') ?>" alt="Logo Krzysztofa Kmiecia" loading="lazy" />
            <div>Krzysztof Kmieć</div>
        </a>
        <!-- Column of logo -->
    </div>

    <!-- Author -->
    <div class="author grid-gap">
        <span>&copy;</span> <?= intval(date('Y')) > 2022 ? '2022-'.date('Y') : '2022' ?> - Krzysztof Kmieć
    </div>
    <!-- Author end -->
</footer>
<!-- FOOTER END -->