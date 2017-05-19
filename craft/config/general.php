<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(

    // applies to all domains
    '*' => [
        'phpMaxMemoryLimit' => '6400M',
        'omitScriptNameInUrls' => 'true',
        'imageDriver' => 'imagick',
        'rememberedUserSessionDuration' => 'P1Y',
        'userSessionDuration' => 'P1D',
        'defaultWeekStartDay' => 0,

        // Enable CSRF Protection (recommended, will be enabled by default in Craft 3)
        'enableCsrfProtection' => true,

        // Control Panel trigger word
        'cpTrigger' => 'admin',

    ],

    // overrides for local dev url
    '.dev' => [
        'devMode' => true,
        'imageDriver' => false,

        'environmentVariables' => array(
            'siteUrl' => '//davidstanleyillustration.dev:8888/',
            'basePath' => '/Users/M8M/Sites/dks/public/'
        )

    ],

    // overrides for production url
    'www.davidstanleyillustration.com/' => [
        'devMode' => false,

        'environmentVariables' => array(
            'siteUrl' => '//www.davidstanleyillustration.com/',
            'basePath' => ''
        )

    ]

);
