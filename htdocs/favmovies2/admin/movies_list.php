<?php
require('./config/config.php');

// Lookup all of the records in the movielist table

$query = 'SELECT * FROM movielist ORDER BY movieTitle';
	$statement = $db->prepare($query);
	$statement->execute();
	$movies = $statement->fetchAll();
	$statement->closeCursor();

$pageTitle = "Favorite Movies List"; // Value passed to the header.php so the browser tab is correct for this page
?>

<div class="container"> <!-- Open Bootstrap container -->

<?php include 'header.php'; ?>

<h3>The List</h3>
<h4><strong>Number of Favorite Movies: <?php echo $movieCount; ?></strong></h4>
<br />

<!-- display a table of movies -->
<div class="table-responsive"> <!-- Required by Bootstrap to make table responsive to small screens; refer to getbootstrap.com -->
	<table class="table table-striped table-hover"> <!-- Used by Bootstrap to make table responsive to small screens; refer to getbootstrap.com -->
	<tr>
        	<th>Movie Title</th>
		<th>Starring</th>
                <th>Year<br />Released</th>
                <th>MPAA<br />Rating</th>
                <th>Genre</th>
		<th>IMDb<br />Rating</th>
	</tr>
        <?php foreach ($movies as $movie) : ?>
        <tr>
	<?php
		// Format the dates correctly; leave blank if the date is not set; notice different parameter setting for date format in other pages in this app
		if (($movie['dateEntered'] == "0000-00-00 00:00:00")) {
        	$dateEntered = " ";
        	} else {
        	$dateEntered = date("F d, Y", strtotime($movie['dateEntered']));
		}

		if (($movie['dateModified'] == "0000-00-00 00:00:00")) {
        	$dateModified = " ";
       	 	} else {
        	$dateModified = date("F d, Y", strtotime($movie['dateModified']));
		}
	?>
		<!-- The next line creates link containing movieID to pass to movies_detail.php by way of the URL using the $_GET array -->
		<!-- The $app_URL is in the config.php file -->
		<td><a href="<?php echo $app_URL; ?>/movies_detail.php?movieID=<?php echo $movie['movieID']; ?>"><?php echo $movie['movieTitle']; ?></a></td>
                <td><?php echo $movie['movieStars']; ?></td>
		<td><?php echo $movie['releaseYear']; ?></td>
                <td><?php echo $movie['movieRating']; ?></td>
		<td><?php echo $movie['movieGenre']; ?></td>
		<td><?php echo $movie['IMDb_rating']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
   </div> <!-- Close table div -->
</div>  <!-- Close Bootstrap container -->

<?php include 'footer.php'; ?>

</body>
</html>
