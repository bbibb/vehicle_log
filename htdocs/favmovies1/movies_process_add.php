<?php
require('./config/config.php');

// Get added movie variable values from the $_POST array

$movieTitle = filter_input(INPUT_POST, 'movieTitle');
$releaseYear = filter_input(INPUT_POST, 'releaseYear');
$movieRating = filter_input(INPUT_POST, 'movieRating');

// Validate to make sure there is data in all fields

if (empty($movieTitle)) {
	$pageTitle = "Error: No Movie Title";
	echo "<div class=container>";	
	include('./header.php');
	echo '<div class="alert alert-warning">'; // Bootstrap class for alert warning; refer to getbootstrap.com
	echo "<strong>Error!</strong> Enter a Movie Title in the form. Please try again.";
	echo "</div>";
    	include('./footer.php');
	echo "</div>";
	echo "</body></html>";
	die;
}

if (empty($releaseYear)) {
	$pageTitle = "Error: No Year Released";
	echo "<div class=container>";	
	include('./header.php');
	echo '<div class="alert alert-warning">';
	echo "<strong>Error!</strong> Enter the Release Year for the movie in the form. Please try again.";
	echo "</div>";
    	include('./footer.php');
	echo "</div>";
	echo "</body></html>";
	die;
} 

if (empty($movieRating)) {
	$pageTitle = "Error: No Movie Rating";
	echo "<div class=container>";	
	include('./header.php');
	echo '<div class="alert alert-warning">';
	echo "<strong>Error!</strong> Enter the Motion Picture Association of America Rating for the movie in the form. Please try again.";
	echo "</div>";
    	include('./footer.php');
	echo "</div>";
	echo "</body></html>";
	die;
} 
 

// Create a new record and add the new movie variable values to the database

$query = 'INSERT INTO movielist (movieTitle, releaseYear, movieRating, dateEntered) VALUES (:movieTitle, :releaseYear, :movieRating, now() )';
$statement = $db->prepare($query);
$statement->bindValue(':movieTitle', $movieTitle);
$statement->bindValue(':releaseYear', $releaseYear);
$statement->bindValue(':movieRating', $movieRating);
$statement->execute();
$statement->closeCursor();

//Display the movie list
include('movies_list.php');

?>         
