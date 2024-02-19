<?php
require('./config/config.php');

// Retrieve information from _POST array
$movieID = filter_input(INPUT_POST, 'movieID');

// echo "Movie ID = $movieID";


// Query the database

$query = 'SELECT * FROM movielist
              WHERE movieID = :movie_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":movie_id", $movieID);
    $statement->execute();
    $movie = $statement->fetch();
    $statement->closeCursor();

$pageTitle = 'Edit a Movie';

?>

<!-- NOTE: The following form is almost the same as the movies_add.php form; notice the changes below -->

<div class="container"> <!-- Open Bootstrap container -->

<?php include './header.php'; ?>
 
<h3>Edit a Movie</h3><br />

<form class="form" name="edit" method="post" action="movies_process_edit.php">

<div class="form-group form-group-lg"> <!-- Class required for Bootstrap css for forms -->
<div class="row"> <!-- Class required for Bootstrap css for forms -->
<div class="col-lg-4"> <!-- Class required for Bootstrap css for forms -->
<label for="title"><b>Movie Title:</b></label>
<!-- IMPORTANT: Notice the use of the value= parameter in the next line which is used to populate the form with the current variable value -->
<input class="form-control input-lg" type="text" name="movieTitle" value="<?php echo $movie['movieTitle']; ?>" placeholder="Title of the movie" /> <!-- Class required for Bootstrap css for forms -->
<input type="hidden" name="movieID" value="<?php echo $movie['movieID']; ?>" /> <!-- Notice type="hidden" used to pass the movieID value to the movies_process_edit.php page -->
</div></div><br />

<div class="form-group form-group-lg">
<div class="row">
<div class="col-lg-4">
<label for="releaseYear"><b>Release Year:</b></label>
<input class="form-control input-lg" type="text" name="releaseYear" value="<?php echo $movie['releaseYear']; ?>" placeholder="Year the movie was released" />
</div></div><br />

<div class="form-group form-group-lg">
<div class="row">
<div class="col-lg-4">
<label for="movieRating"><b>Movie Rating:</b></label>
<input class="form-control input-lg" type="text" name="movieRating" value="<?php echo $movie['movieRating']; ?>" placeholder="MPAA Rating (G, PG, PG-13, R, etc)" />
</div></div><br />

<input class="btn btn-default" type="submit" value="Save Changes"> <!-- Class required for Bootstrap css for forms -->
<input class="btn btn-default" type="reset" name="reset" value="Reset"> <!-- Class required for Bootstrap css for forms -->
</form>
</div> <!-- Close form-group -->

<?php include "./footer.php"; ?>

</div>
</div> <!-- Close container -->

</body>
</html>
