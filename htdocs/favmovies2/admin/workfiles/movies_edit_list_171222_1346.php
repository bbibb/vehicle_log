<?php
require('./config/config.php');

// QUERY FOR ALL OF THE MOVIES IN THE DATABASE
$query = 'SELECT * from movielist ORDER BY movieTitle ASC'; // Notice ASC dor accending order
	$statement1 = $db->prepare($query);
	$statement1->execute();
	$movies = $statement1->fetchAll();
	$statement1->closeCursor();

$pageTitle = "Edit from Movie List";

?>

<div class="container">

<?php include("./header.php"); ?>

<h3>Movie Search Results</h3>
<br />

<div class="table-responsive"> <!-- Required by Bootstrap to make table responsive to small screens; refer to getbootstrap.com -->
<table class="table table-striped table-hover"> <!-- Used by Bootstrap to make table responsive to small screens; refer to getbootstrap.com -->
        <thead>
            <tr>
                <th>Movie Title</th>
		<th>Release Year</th>
		<th>Movie Rating</th>
                <th>Date Added</th>
		<th>Date Modified</th>
		<th>&nbsp;</th>
		<th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>		

<?php foreach ($movies as $movie) : ?> 

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
            <tr>
		<td><?php echo $movie['movieTitle']; ?></td>
		<td><?php echo $movie['releaseYear']; ?></td>
		<td><?php echo $movie['movieRating']; ?></td>
		<td><?php echo $dateEntered; ?></td>
		<td><?php echo $dateModified; ?></td>
		<td><?php include "./movies_edit_button.php"; ?></td>
		<td><?php include "./movies_delete_button.php"; ?></td>				
            </tr>
<?php endforeach; ?>
        </tbody>
    </table>
</div> <!-- Close table div -->

<?php include "./footer.php"; ?>

</div> <!-- Close container div -->
</body>
</html>




