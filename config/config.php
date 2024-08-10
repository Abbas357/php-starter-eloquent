<?php
return [
    'app' => [
        'name' => 'Official Website of Communication and Works Department',
        'env' => envVar('APP_envVar', 'development'),
        'debug' => envVar('APP_DEBUG', true),
        'url' => envVar('BASE_URL', 'http://localhost/cwis'),
        'dir' => $_SERVER['DOCUMENT_ROOT'] . '/cwis',
    ],
    'database' => [
        'host' => envVar('DB_HOST', '127.0.0.1'),
        'database' => envVar('DB_NAME', 'cwdgkp_new'),
        'username' => envVar('DB_USER', 'root'),
        'password' => envVar('DB_PASSWORD', ''),
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
    ],
];
