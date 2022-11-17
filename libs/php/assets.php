<?php

    // A S S E T S   G L O B A L   L I B R A R Y

    // Contains global assets functions. Requires *config.php* file to work properly.


    // Check if user wants to enter file and redirect to unauthorized if true
    if(!defined('site'))
    {
        require_once __DIR__."/../../errors/403.php";
        header('HTTP/1.0 403 Forbidden');
        exit();
    }


    // Print asset's URL
    function asset($file)
    {
        // Get already imported app configuration
        $config = $GLOBALS['config'];

        echo $config['app_url'].'libs/assets/'.$file;
    }

    // Print css URL
    function css($file)
    {
        // Get already imported app configuration
        $config = $GLOBALS['config'];

        echo '<link rel="stylesheet" href="'.$config['app_url'].'libs/styles/'.$file.'.css" />';
    }

    // Print js URL
    function js($data)
    {
        // Get already imported app configuration
        $config = $GLOBALS['config'];

        $module = ' ';

        if(isset($data['module']) && $data['module'] === true)
        {
            $module = ' type="module" ';
        }

        echo '<script'.$module.'src="'.$config['app_url'].'libs/js/'.$data['file'].'.js"></script>';
    }

    function linkTo($url)
    {
        // Get already imported app configuration
        $config = $GLOBALS['config'];
        
        echo $config['app_url'].$url;
    }
    
    // Boolean that claims assets library has been imported
    $assets = true;