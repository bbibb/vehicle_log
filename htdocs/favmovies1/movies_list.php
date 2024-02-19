<?php
require('./config/config.php');

$pageTitle = "Favorite Movies List"; // Value passed to the header.php so the browser tab is correct for this page

// Lookup all of the records in the movielist table

$query = 'SELECT * FROM movielist ORDER BY movieTitle';
	$statement = $db->prepare($query);
	$statement->execute();
	$movies = $statement->fetchAll();
	$statement->closeCursor();

?>

<div class="container"> <!-- Open Bootstrap container -->

<?php include 'header.php'; ?>

<h3>The List</h3>
<br />

<!-- display a table of movies -->
<div class="table-responsive"> <!-- Required by Bootstrap to make table responsive to small screens; refer to getbootstrap.com -->
	<table class="table table-striped table-hover"> <!-- Used by Bootstrap to make table responsive to small screens; refer to getbootstrap.com -->
	<tr>
        	<th>Movie Title</th>
                <th>Year Released</th>
                <th>Rating</th>
                <th>Date Entered</th>
		<th>Date Modified</th>
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

                <td><?php echo $movie['movieTitle']; ?></td>
                <td><?php echo $movie['releaseYear']; ?></td>
                <td><?php echo $movie['movieRating']; ?></td>
		<td><?php echo $dateEntered; ?></td>
		<td><?php echo $dateModified; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
   </div> <!-- Close table div -->
</div>  <!-- Close Bootstrap container -->

<?php include 'footer.php'; ?>

</body>
</html>
