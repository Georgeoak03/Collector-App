<?php

require_once('functions.php');
$wine = $_GET;
addWineToDb($wine);
header('Location: wineCollector.php');
