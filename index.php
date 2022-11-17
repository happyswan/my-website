<?php

    // H O M E   S I T E


    // Start session
    session_start();


    // Tell PHP this file is site
    define('site', true); 


    // Import app configuration
    $config = require __DIR__.'/config.php';


    // Check if technical pause is at the time
    if($config['technical_pause'])
    {
        header('Location: ./'.$config['technical_pause_url']);
        exit();
    }


    // Import language library
    require_once $config['root'].'libs/php/language.php';

    // Import assets library
    require_once $config['root'].'libs/php/assets.php';
    

    // Get language
    $lang = getLanguage();


    // Import js scripts
    $jsScripts = [
        [
            "file" => "fluid"
        ],
        [
            "file" => "scrollAccelerator"
        ],
        [
            "file" => "ajax"
        ],
        [
            "file" => "sendEmail"
        ],
        [
            "file" => "navbar"
        ],
    ];

    $cssScripts = [
        'global',
        'navbar',
        'banner',
        'fluid',
        'services',
        'aboutMe',
        'portfolio',
        'contact',
        'footer',
        'scrollToTopBtn',
        'box',
        'mixed',
        'animations',
    ];
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
    <head>

        <!-- Metadata -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="robots" content="index, follow">
        <meta name="GOOGLEBOT" content="index, follow">

        <meta name="copyright" content="Krzysztof Kmieć">
        <meta name="distribution" content="poland">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="<?= $config['author'] ?>" />
        <meta name="description" content="<?= $config['description'][$lang] ?>" />
        <meta name="keywords" content="<?= $config['keywords'][$lang] ?>" />

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="<?= asset($config['favicon']) ?>">

        <!-- Title -->
        <title><?= $config['app_name'] ?></title>

        <!-- Font import -->
        <?php require_once $config['root'].'libs/php/fonts.php'; ?>

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

        <?php

            // Import page components

            include __DIR__.'/libs/components/navbar.php';
        
        ?>

        <main>
            <?php

                include __DIR__.'/libs/components/banner.php';
                include __DIR__.'/libs/components/services.php';
                include __DIR__.'/libs/components/aboutMe.php';
                include __DIR__.'/libs/components/portfolio.php';
                include __DIR__.'/libs/components/contact.php';
                
            ?>
        </main>

        <?php

            include __DIR__.'/libs/components/footer.php';
            include __DIR__.'/libs/components/scrollToTopBtn.php';
            include __DIR__.'/libs/components/fluidFilter.php';
            
        ?>


        <!-- Javascript import -->
        <script>
            var appUrl = '<?= $config['app_url'] ?>';
            var debug = <?= $config['debug'] ? 'true' : 'false' ?>;
        </script>

        <?php
            foreach($jsScripts as $script)
            {
                js($script);
            }
        ?>

    </body>
</html>