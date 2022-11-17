<?php

    // T E C H N I C A L   P A U S E   S I T E

    
    // Tell PHP this file is site
    define('site', true); 


    // Import app configuration
    $config = require_once __DIR__.'/config.php';


    // Check if technical pause is at the time
    if(!$config['technical_pause'])
    {
        
        header('Location: ./');
        exit();
    }


    // Import language library
    require_once $config['root'].'libs/php/language.php';

    // Import assets library
    require_once $config['root'].'libs/php/assets.php';
    

    // Get language
    $lang = getLanguage();
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
    <head>

        <!-- Metadata -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="<?= $config['author'] ?>" />
        <meta name="description" content="<?= $config['description'][$lang] ?>" />
        <meta name="keywords" content="<?= $config['keywords'][$lang] ?>" />

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="<?= asset($config['favicon']) ?>">

        <!-- Title -->
        <title>Przerwa techniczna | <?= $config['app_name'] ?></title>

        <!-- Font import -->
        <?php require_once $config['root'].'libs/php/fonts.php'; ?>

        <!-- Mandatory global CSS import -->
        <?php css($config['global_css']); ?>

        <!-- Theme import -->
        <?php css("themes/{$config['default_theme']}/theme"); ?>

        <!-- Errors CSS import -->
        <?php css("errors"); ?>

    </head>

    <body>

        <div class="img-container">
            <img src="<?= asset('logo-black.webp') ?>" alt="Logo Krzysztofa Kmiecia" loading="lazy">
        </div>
        
        <h1>Przerwa techniczna!</h1>
        <p>Planowany termin przywrócenia strony: <b><i><?= $config['technical_pause_enddate'] ?></i></b></p>

    </body>
</html>