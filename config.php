<?php

    // W E B S I T E   C O N F I G U R A T I O N   F I L E

    // WARNING!!! Editing this file may cause serious disfunctions or change the website completely.


    // Check if user wants to enter file and redirect to unauthorized if true
    if(!defined('site'))
    {
        require_once __DIR__."/errors/403.php";
        header('HTTP/1.0 403 Forbidden');
        exit();
    }


    // Return configuration
    return [

        // URL config
        'app_url' => "https://$_SERVER[HTTP_HOST]/",
        'root' => "$_SERVER[DOCUMENT_ROOT]/",

        // Head config
        'app_name' => 'Krzysztof Kmieć - Aplikacje webowe i mobilne',
        'favicon' => 'logo.ico',
        'author' => 'Krzysztof Kmieć',
        'description' => [
            'pl' => 'Witaj, nazywam się Krzysztof i jestem programistą full stack tworzącym oprogramowanie'
        ],
        'keywords' => [
            'pl' => 'Krzysztof Kmieć, strony internetowe, e-commerce, aplikacje webowe, aplikacje mobilne, usługi programistyczne'
        ],
        

        // CSS config
        'global_css' => 'global', 
        'default_theme' => 'light', // to choose: light


        // Debug config
        'debug' => false, // if false == debug is turned off, if true == debug is turned on


        // Technical pause
        'technical_pause' => false,
        'technical_pause_url' => 'przerwa-techniczna.php',
        'technical_pause_enddate' => 'Wkrótce',


        // Contact data
        'email' => 'contact@kkmiec.pl',
        'phone' => '509 806 101',


        // Language config
        'languages' => [
            'pl',
            'en'
        ],
        'default_language' => 'pl', // to choose: pl, en
        
    ];