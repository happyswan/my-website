<?php

    // 4 0 3   E R R O R   P A G E

    
    // Tell PHP this file is site
    define('site', true); 


    // Import app configuration
    $config = require __DIR__.'/../config.php';

    // Import language library
    require_once __DIR__.'/../libs/php/language.php';

    // Import assets library
    require_once __DIR__.'/../libs/php/assets.php';
    

    // Get language
    $lang = getLanguage();
    

    // Import js scripts
    $jsScripts = [
        [
            "file" => "linksTransition"
        ]
    ];

    $cssScripts = [
        'global',
        'errors'
    ];
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
    <head>

        <!-- Metadata -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="robots" content="noindex, nofollow">
        <meta name="GOOGLEBOT" content="noindex, nofollow">

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="<?= asset($config['favicon']) ?>">

        <!-- Title -->
        <title>Błąd 403 | <?= $config['app_name'] ?></title>

        <!-- Font import -->
        <?php require_once __DIR__.'/../libs/php/fonts.php'; ?>

        <!-- CSS import -->
        <?php
            foreach($cssScripts as $css)
            {
                css($css);
            }
        ?>

        <!-- Theme import -->
        <?php css("themes/{$config['default_theme']}/theme"); ?>

    </head>

    <body>

        <div class="img-container">
            <img src="<?= asset('logo-black.webp') ?>" alt="Logo Krzysztofa Kmiecia" loading="lazy">
        </div>
        
        <h1>Błąd 403!</h1>
        <p>Nie posiadasz uprawnień do tego pliku...</p>
        <a href="<?= $config["app_url"] ?>"><i class="fa-solid fa-arrow-left-long"></i> &nbsp; Powrót do strony</a>
                

        <!-- Javascript import -->
        <script>
            var appUrl = '<?= $config['app_url'] ?>';
            var debug = <?= $config['debug'] ?>;
        </script>

        <?php
            foreach($jsScripts as $script)
            {
                js($script);
            }
        ?>

    </body>
</html>