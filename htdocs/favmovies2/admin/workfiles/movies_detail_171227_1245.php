<?php
require('./config/config.php');

// Get movieID foor Movie Query
    if(!isset($movieID)) {
         $movieID = $_GET['movieID'];
       } 

// Show the results of the movie ID query 
// Retrieve the record for the movieID
$queryEdit = 'SELECT * FROM movielist WHERE movieID = :movie_id';
	$statement2 = $db->prepare($queryEdit);
	$statement2->bindValue(':movie_id', $movieID);
	$statement2->execute();
	$recordEdit = $statement2->fetch();
	$movieTitle = $recordEdit['movieTitle'];
	$movieStars = $recordEdit['movieStars'];
	$releaseYear = $recordEdit['releaseYear'];
	$movieRating = $recordEdit['movieRating'];
	$movieGenre = $recordEdit['movieGenre'];	
	$IMDb_rating = $recordEdit['IMDb_rating'];
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

$pageTitle = 'Movie Details';

?>

<div class="container">

<?php include './header.php'; ?>
 
<h3>Movie Details</h3><br />

<table class="table">
<tr>
<td align="right"><strong>Movie Title:</strong></td>
<td><?php echo $movieTitle; ?></td>
</tr>
<tr>
<td align="right"><strong>Starring:</strong></td>
<td><?php echo $movieStars; ?></td>
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
<td align="right"><strong>Genre:</strong></td>
<td><?php echo $movieGenre; ?></td>
</tr>
</tr>
<tr>
<td align="right"><strong>IMDb Rating (Out of 10):</strong></td>
<td><?php echo $IMDb_rating; ?></td>
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

<!-- Offer to edit the record -->
<form action="<?php echo $app_URL; ?>/movies_edit.php" method="POST" id="movies_edit">
<input type="hidden" name="movieID" value="<?php echo $movieID; ?>" />
<!-- Bootstrap 3 button syntax -->
<button type="submit" class="btn btn-primary">Edit the Movie?</button>
</form>

</td>
</table>

<?php include "./footer.php"; ?>

</div>
</div> <!-- Close container -->

</body>
</html>



