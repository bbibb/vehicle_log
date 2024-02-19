<?php
    $dsn = 'mysql:host=localhost;dbname=cpt283bibb_favmovies1';
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

?>
