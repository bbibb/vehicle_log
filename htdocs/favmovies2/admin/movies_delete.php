<?php
require('./config/config.php');

// Retrieve information from _POST array
$movieID = filter_input(INPUT_POST, 'movieID');

// echo "Movie ID = $movieID";

// DELETE query to remove a record from the database

$query = 'DELETE FROM movielist WHERE movieID = :movie_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':movie_id', $movieID);
    $statement->execute();
    $statement->closeCursor();

include './movies_list.php';

?>
