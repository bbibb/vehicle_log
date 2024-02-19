<?php
    $dsn = 'mysql:host=localhost;dbname=cpt283bibb_favmovies2';
    $username = 'cpt283bibb';
    $password = 'aside-FLARE-grandam';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('./errors/database_error.php');
        exit();
    }

// Set the time zone and set the current date added
date_default_timezone_set('America/New_York');

// Set variables for app
$app_URL = 'https://cpt283-bibb.beausanders.net/favmovies2';
$app_root = '/home/cpt283bibb/www/www/favmovies2';
$app_name = 'My Favorite Movies v2';

// Global queries for this app
// Query the movielist table and determine the number of movies in the database
$query = 'SELECT * FROM movielist';
        $movieCountRows = $db->prepare($query);
        $movieCountRows->execute();
        $movieCount_raw = $movieCountRows->rowCount();
        $movieCount = number_format($movieCount_raw);

?>
