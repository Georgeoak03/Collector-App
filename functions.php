<?php

function dbpull()
{
    $connectionString = 'mysql:host=db; dbname=winecollector';
    $dbUsername = 'root';
    $dbPassword = 'password';
    $db = new PDO($connectionString, $dbUsername, $dbPassword);

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $queryString = 'SELECT `wine`, `date`, `drinking_location`, `colour`, `producer`, `region`, `vintage`, `price_gbp`, `rating` FROM `wines` ORDER BY `date` DESC';
    $query = $db->prepare($queryString);
    $query->execute();

    $allResults = $query->fetchAll();
    return $allResults;
}

function displayWine(array $wine): string
{
    if (
        !array_key_exists('wine', $wine) ||
        !array_key_exists('date', $wine) ||
        !array_key_exists('drinking_location', $wine) ||
        !array_key_exists('colour', $wine) ||
        !array_key_exists('producer', $wine) ||
        !array_key_exists('region', $wine) ||
        !array_key_exists('vintage', $wine) ||
        !array_key_exists('price_gbp', $wine) ||
        !array_key_exists('rating', $wine)
    ) {
        return '';
    }

     $wineHtml =
        '<tr><td class="wine">' . $wine['wine'] . '</td><td class="wine-content"> ' . $wine['date'] . '</td><td class="wine-content"> ' . $wine['drinking_location'] . '</td><td class="wine-content"> ' . $wine['colour'] . '</td><td class="wine-content"> ' . $wine['producer'] . '</td><td class="wine-content"> ' . $wine['region'] . '</td><td class="wine-content"> ' . $wine['vintage'] . '</td><td class="wine-content"> ' . $wine['price_gbp'] . '</td><td class="wine-content"> ' . $wine['rating'] . '</td></tr>';
    return $wineHtml;
}

function addWineToDb(array $newwine)
{
    $wine = $newwine['wine'];
    $date = $newwine['date'];
    $drinking_location = $newwine['drinking_location'];
    $colour = $newwine['colour'];
    $producer = $newwine['producer'];
    $region = $newwine['region'];
    $vintage = $newwine['vintage'];
    $price_gbp = $newwine['price_gbp'];
    $rating = $newwine['rating'];

    $connectionString = 'mysql:host=db; dbname=winecollector';
    $dbUsername = 'root';
    $dbPassword = 'password';
    $db = new PDO($connectionString, $dbUsername, $dbPassword);
    $queryString = 'INSERT INTO  `wines` (`wine`, `date`, `drinking_location`, `colour`, `producer`, `region`, `vintage`, `price_gbp`, `rating`)
        VALUES (:wine, :date, :drinking_location, :colour, :producer, :region, :vintage, :price_gbp, :rating)';
    $query = $db->prepare($queryString);
    $query->execute (['wine' => $wine, 'date' => $date, 'drinking_location' => $drinking_location, 'colour' => $colour, 'producer' => $producer, 'region' => $region, 'vintage' => $vintage, 'price_gbp' => $price_gbp, 'rating' => $rating]);
}