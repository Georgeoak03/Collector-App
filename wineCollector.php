<?php

$connectionString = 'mysql:host=db; dbname=winecollector';
$dbUsername = 'root';
$dbPassword = 'password';
$db = new PDO($connectionString, $dbUsername, $dbPassword);

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$queryString = 'SELECT * FROM `wines` ORDER BY `date` DESC';
$query = $db->prepare($queryString);
$query->execute();

$allResults = $query->fetchAll();

require_once('functions.php');

?>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wine Library</title>
        <link rel="stylesheet" href="collector.css">
    <body>
        <h1>Wine Library</h1>
        <p class="intro">This is Wine Library! Use this to keep a record of what wines you've drunk and where.
        blah blah blah blah etc...</p>
        <div class="wineDateTable">
            <table>
                <thead>
                    <tr class="heading-row">
                        <th>Wines</th>
                        <th>Date</th>
                        <th>Location</th>
                        <th>Colour</th>
                        <th>Producer</th>
                        <th>Region</th>
                        <th>Vintage</th>
                        <th>Price</th>
                        <th>Rating</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($allResults as $wines) {
                        echo displayWine($wines);
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>



