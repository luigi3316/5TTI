<?php

$dsn = 'mysql:host=localhost;charset=utf8;dbname=immorem2022;port=3333';
$user = 'root';
$password = 'root';

$dbh = new PDO($dsn, $user, $password, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);
