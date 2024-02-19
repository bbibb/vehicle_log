<?php
require('./config/config.php');

// Retrieve information from _POST array
$movieID = filter_input(INPUT_POST, 'movieID');
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

// UPDATE information in the table
$query = "UPDATE movielist SET
		`movieTitle` = :movieTitle,
		`releaseYear` = :releaseYear,
		`movieRating` = :movieRating,
		`dateModified` = now()
	WHERE `movieID` = :movie_id";
	$statement = $db->prepare($query);
	$statement->bindValue(':movieTitle', $movieTitle);
	$statement->bindValue(':releaseYear', $releaseYear);
	$statement->bindValue(':movieRating', $movieRating);
	$statement->bindValue(':movie_id', $movieID);
	$statement->execute();
	$statement->closeCursor();

// Show the results of the edit
// Retrieve the edited version of the record
$queryEdit = 'SELECT * FROM movielist WHERE movieID = :movie_id';
	$statement2 = $db->prepare($queryEdit);
	$statement2->bindValue(':movie_id', $movieID);
	$statement2->execute();
	$recordEdit = $statement2->fetch();
	$movieTitle = $recordEdit['movieTitle'];
	$releaseYear = $recordEdit['releaseYear'];
	$movieRating = $recordEdit['movieRating'];
	$dateEntered = $recordEdit['dateEntered'];
	$dateModified = $recordEdit['dateModified'];
	$statement2->closeCursor();

// Retrieve the description for the movie rating
$query = 'SELECT * FROM movie_rating WHERE rating = :movieRating';
        $statement3 = $db->prepare($query);
        $statement3->bindValue(':movieRating', $movieRating);
        $statement3->execute();
        $statement3 = $statement3->fetch();
        $rating_description = $statement3['rating_description'];

// Change date and time formats
if (($dateEntered == "0000-00-00 00:00:00")) {
       	$dateEntered = " ";
       	} else {
       	$dateEntered = date("l, F d, Y - g:i A", strtotime($dateEntered));
	}

if (($dateModified == "0000-00-00 00:00:00")) {
       	$dateModified = " ";
 	} else {
       	$dateModified = date("l, F d, Y - g:i A", strtotime($dateModified));
	}

// Create HTML page to display the edited record

$pageTitle = 'Results of Edit';

?>

<div class="container">

<?php include './header.php'; ?>
 
<h3>Edit Results</h3><br />

<table class="table">
<tr>
<td align="right"><strong>Movie Title:</strong></td>
<td><?php echo $movieTitle; ?></td>
</tr>
<tr>
<td align="right"><strong>Year Movie Released:</strong></td>
<td><?php echo $releaseYear; ?></td>
</tr>
<tr>
<td align="right"><strong>MPAA Rating:</strong></td>
<td><?php echo $movieRating; ?> - <?php echo $rating_description; ?></td>
</tr>
<tr>
<td align="right"><strong>Date Entered:</strong></td>
<td><?php echo $dateEntered; ?></td>
</tr>
<tr>
<td align="right"><strong>Date Modified:</strong></td>
<td><?php echo $dateModified; ?></td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="left">

<!-- Offer the edit the record again -->

<form action="movies_edit.php" method="POST" id="movies_edit">
<input type="hidden" name="movieID" value="<?php echo $movieID; ?>" />
<!-- Bootstrap 3 button syntax -->
<button type="submit" class="btn btn-primary">Edit Again?</button>
</form>

</td>
</table>

<?php include "./footer.php"; ?>

</div>
</div> <!-- Close container -->

</body>
</html>
	
	    


?>
