<?php

    // P O R T F O L I O   C O M P O N E N T


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

<!-- PORTFOLIO -->
<section id="portfolio">

    <!-- Background -->
    <div class="img-bg" style="filter: brightness(.5)">
        <img src="<?= asset('programming-background4.webp') ?>" alt="Tło programowanie" loading="lazy" />
    </div>
    <!-- Background end -->

    <!-- Title -->
    <div class="title-container">
        <img src="<?= asset('logo-black.webp') ?>" alt="Logo Krzysztofa Kmiecia" loading="lazy" />
        <h2>Ostatnio wykonane projekty</h2>
        <img src="<?= asset('logo-black.webp') ?>" alt="Logo Krzysztofa Kmiecia" loading="lazy" />
    </div>
    <!-- Title end -->

    <!-- Portfolio projects -->
    <div class="content-container">
        <div class="row">
            <!-- Project -->
            <div class="project-container">
                <div class="project">
                    <div class="img-container">
                        <img src="<?= asset('projects/samuel-jasinski/1.webp') ?>" alt="Kawałek projektu strony Samuela Jasińskiego" loading="lazy">
                        <img src="<?= asset('projects/samuel-jasinski/2.webp') ?>" alt="Kawałek projektu strony Samuela Jasińskiego" loading="lazy">
                        <img src="<?= asset('projects/samuel-jasinski/3.webp') ?>" alt="Kawałek projektu strony Samuela Jasińskiego" loading="lazy">
                        <img src="<?= asset('projects/samuel-jasinski/4.webp') ?>" alt="Kawałek projektu strony Samuela Jasińskiego" loading="lazy">
                    </div>

                    <div class="title">
                        <img class="logo" src="<?= asset('logos/samuel-logo-white.webp') ?>" alt="Logo Samuela Jasińskiego" >

                        <h3>Samuel Jasiński</h3>
                        <p class="hover-display-text">
                            Najedź na mnie żeby zobaczyć<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Project end -->

            <!-- Project -->
            <div class="project-container">
                <div class="project">
                    <div class="img-container">
                        <img src="<?= asset('projects/skymar/1.webp') ?>" alt="Kawałek projektu strony Skymar" loading="lazy">
                        <img src="<?= asset('projects/skymar/2.webp') ?>" alt="Kawałek projektu strony Skymar" loading="lazy">
                        <img src="<?= asset('projects/skymar/3.webp') ?>" alt="Kawałek projektu strony Skymar" loading="lazy">
                        <img src="<?= asset('projects/skymar/4.webp') ?>" alt="Kawałek projektu strony Skymar" loading="lazy">
                        <img src="<?= asset('projects/skymar/5.webp') ?>" alt="Kawałek projektu strony Skymar" loading="lazy">
                        <img src="<?= asset('projects/skymar/6.webp') ?>" alt="Kawałek projektu strony Skymar" loading="lazy">
                    </div>

                    <div class="title">
                        <img class="logo" src="<?= asset('logos/skymar-logo.webp') ?>" alt="Logo firmy Skymar" >

                        <h3>Skymar</h3>
                        <p class="hover-display-text">
                            Najedź na mnie żeby zobaczyć<br>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Project end -->
        </div>
    </div>
    <!-- Portfolio projects end -->

</section>
<!-- PORTFOLIO END -->