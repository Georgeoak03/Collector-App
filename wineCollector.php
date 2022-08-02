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
//print_r($allResults);

?>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wine Library</title>
        <link rel="stylesheet" href="collector.css">
    <body>
        <h1>Wine Library</h1>
        <p class="intro">This is Wine Library! Use this to keep a record of what wines you've drunk and where.</p>
    <table>
        <thead>
        <tr class="heading-row">
            <th>Wines</th>
            <th>Producer</th>
            <th>Region</th>
            <th>Date</th>
            <th>Location Drank</th>
            <th>Colour</th>
            <th>Vintage</th>
            <th>Price</th>
            <th>Rating</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <?php foreach ($allResults as $allResult){ ?>
            <td class="wine"> <?php echo $allResult['wine']; ?> </td>
            <td class="wine-content"> <?php echo $allResult['producer']; ?> </td>
            <td class="wine-content"> <?php echo $allResult['region']; ?> </td>
            <td class="wine-content"> <?php echo $allResult['date']; ?> </td>
            <td class="wine-content"> <?php echo $allResult['drinking_location']; ?> </td>
            <td class="wine-content"> <?php echo $allResult['colour']; ?> </td>
            <td class="wine-content"> <?php echo $allResult['vintage']; ?> </td>
            <td class="wine-content"> <?php echo $allResult['price_gbp']; ?> </td>
            <td class="wine-content"> <?php echo $allResult['rating']; ?> </td>
        </tr>
        <?php } ?>
        </tbody>
