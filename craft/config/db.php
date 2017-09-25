<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(
    '*' => array(
        'tablePrefix' => 'craft',
    ),
    // development database
    '.dev' => array(
        'server' => 'localhost',
        'user' => 'root',
        'password' => 'root',
        'database' => 'dks_db',
    ),
    // production databases
    '.studio' => array(
        'server' => '127.0.0.1',
        'user' => 'dkstanley',
        'password' => 'hvs704fOjw`E_Vn$G"',
        'database' => 'dks_db',
    ),
    '.com' => array(
        'server' => '127.0.0.1',
        'user' => 'dkstanley',
        'password' => 'hvs704fOjw`E_Vn$G"',
        'database' => 'dks_db',
    ),
);
