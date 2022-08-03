<link rel="stylesheet" href="collector.css">

<?php
function displayWine(array $wine): string {
    $wineHtml = '
        <tr><td class="wine">' . $wine['wine'] . '</td><td class="wine-content"> ' . $wine['date'] . '</td><td class="wine-content"> ' . $wine['drinking_location'] . '</td><td class="wine-content"> ' . $wine['colour'] . '</td><td class="wine-content"> ' . $wine['producer'] . '</td><td class="wine-content"> ' . $wine['region'] . '</td><td class="wine-content"> ' . $wine['vintage'] . '</td><td class="wine-content"> ' . $wine['price_gbp'] . '</td><td class="wine-content"> ' . $wine['rating'] . '</td></tr>';
    return $wineHtml;
}

