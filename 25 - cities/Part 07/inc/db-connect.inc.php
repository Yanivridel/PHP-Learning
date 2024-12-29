<?php

try {
    $pdo = new PDO('mysql:host=localhost;port=3310;dbname=cities;charset=utf8mb4', 'cities', 'uIXo6X*3kcm8a4Lw', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}
catch (PDOException $e) {
    // var_dump($e->getMessage());
    echo 'A problem occured with the database connection...';
    die();
}
