<?php

    // L A N G U A G E   G L O B A L   L I B R A R Y

    // Contains global language functions. Requires *config.php* file to work properly.


    // Check if user wants to enter file and redirect to unauthorized if true
    if(!defined('site'))
    {
        require_once __DIR__."/../../errors/403.php";
        header('HTTP/1.0 403 Forbidden');
        exit();
    }


    // Get site language (set default if not found)
    function getLanguage()
    {
        // Get already imported app configuration
        $config = $GLOBALS['config'];

        // Get default language
        $lang = $config['default_language'];
    
        // Explode request URL to analyze
        $requestURL = explode('/', $_SERVER['REQUEST_URI']);
    
        // Loop through request to check if language has been found
        foreach($requestURL as $requestPart)
        {
            if(in_array(strtolower($requestPart), $config['languages']))
            {
                return strtolower($requestPart);
            }
        }

        return $lang;
    }