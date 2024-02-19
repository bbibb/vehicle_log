<?php
require('./config/config.php');

// $search_string = $_POST['search_string'];
$search_string = filter_input(INPUT_POST, 'search_string');

// echo "Search String = $search_string<br /><br />";

// Validate that a search string has been entered and then run query

if (empty($search_string)) {
	$pageTitle = "Search Error";
	echo "<div class=container>";	
	include('./header.php');
	echo '<div class="alert alert-warning">'; // Bootstrap class for warning alert
	echo "<strong>Error!</strong> There is nothing to search. Please enter something to lookup.";
	echo "</div>";
    	include('./footer.php');
	echo "</div>";
	die;
} 

$query = 'SELECT * from movielist 
	WHERE movieTitle LIKE :search_string
	OR movieStars LIKE :search_string
	OR releaseYear LIKE :search_string
	OR movieRating LIKE :search_string
	OR movieGenre LIKE :search_string
	OR IMDb_rating LIKE :search_string
	OR dateEntered LIKE :search_string
	OR dateModified LIKE :search_string 
	ORDER BY movieTitle ASC'; // Notice the use of the OR and LIKE operators to check particular fields in the record for the search string
	$statement1 = $db->prepare($query);
	$search_string = "%".$search_string."%"; // This line makes this query search for a "contains" string
	$statement1->bindValue(':search_string', $search_string);
	$statement1->execute();
	$movies = $statement1->fetchAll();
	$statement1->closeCursor();

/* This is an old school query that works
$query = "SELECT * FROM movielist
	WHERE movieTitle LIKE '%$search_string%'
	OR releaseYear LIKE '%$search_string%'
	OR movieRating LIKE '%$search_string%'
	ORDER BY movieTitle ASC"; 
	$movies = $db->query($query);
*/

$pageTitle = "Search Results: $search_string";

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
		<th>Starring</th>
		<th>Release Year</th>
		<th>MPAA<br /> Rating</th>
		<th>Genre</th>
		<th>IMDb<br />Rating</th>
                <th>Date<br />Added</th>
		<th>Date<br />Modified</th>
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
		<td><?php echo $movie['movieStars']; ?></td>
		<td><?php echo $movie['releaseYear']; ?></td>
		<td><?php echo $movie['movieRating']; ?></td>
		<td><?php echo $movie['movieGenre']; ?></td>
		<td><?php echo $movie['IMDb_rating']; ?></td>
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




