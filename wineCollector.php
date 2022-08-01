<?php

$connectionString = 'mysql:host=db; dbname=winecollector';
$dbUsername = 'root';
$dbPassword = 'password';
$db = new PDO($connectionString, $dbUsername, $dbPassword);

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

echo 'hello';
//$allResults = $query->fetchAll();
//print_r($allResults);
