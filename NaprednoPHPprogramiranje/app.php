<?php

use App\Videostore\Entity\Genre;

require __DIR__ . '/vendor/autoload.php';
$databaseConfig = require __DIR__ . '/config/database.php';

try {
    $connection = new PDO(
        'mysql:dbname=' . $databaseConfig['database'],
        $databaseConfig['username'], 
        $databaseConfig['password'],
    );
} catch (Throwable $th) {
    echo 'Connection failed!', PHP_EOL;
    return;
}