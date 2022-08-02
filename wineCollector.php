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

<table>
    <thead>
    <tr>
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
        <td> <?php echo $allResult['wine']; ?> </td>
        <td> <?php echo $allResult['producer']; ?> </td>
        <td> <?php echo $allResult['region']; ?> </td>
        <td> <?php echo $allResult['date']; ?> </td>
        <td> <?php echo $allResult['drinking_location']; ?> </td>
        <td> <?php echo $allResult['colour']; ?> </td>
        <td> <?php echo $allResult['vintage']; ?> </td>
        <td> <?php echo $allResult['price_gbp']; ?> </td>
        <td> <?php echo $allResult['rating']; ?> </td>
    </tr>
    <?php } ?>
    </tbody>
