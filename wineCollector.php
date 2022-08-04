<?php
require_once('functions.php');

$wineCollector = dbpull();
?>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wine Library</title>
        <link rel="stylesheet" href="collector.css">
    </head>
    <body>
        <div class="page-head">
            <h1>Wine Library</h1>
            <p class="intro">This is Wine Library! Use this to keep a record of what wines you've drunk and where.
            blah blah blah blah etc...</p>
        </div>
        <form class="search" method='get' action="newwinepage.php">
            <label class="search-parameters">
                Wine:
                <input type="text" name="wine" />
            </label>
            <br>
            <label class="search-parameters">
                Producer:
                <input type="text" name="producer" />
            </label>
            <br>
            <label class="search-parameters">
                Region:
                <input type="text" name="region" />
            </label>
            <br>
            <label class="search-parameters">
                Date:
                <input type="date" name="date" />
            </label>
            <br>
            <label class="search-parameters">
                Location:
                <input type="text" name="drinking_location" />
            </label>
            <br>
            <label class="search-parameters">
                Colour:
                <input type="text" name="colour" />
            </label>
            <br>
            <label class="search-parameters">
                Vintage:
                <input type="text" name="vintage" />
            </label>
            <br>
            <label class="search-parameters">
                Price:
                <input type="text" name="price_gbp" />
            </label>
            <br>
            <label class="search-parameters">
                Rating:
                <input type="text" name="rating" />
            </label>
            <br>
            <input type="submit" />
        </form>
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
                <tbody class="db-input">
                    <?php
                    foreach($wineCollector as $wines) {
                        echo displayWine($wines);
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
