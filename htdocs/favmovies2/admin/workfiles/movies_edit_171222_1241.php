<?php
require('./config/config.php');

// Retrieve information from _POST array
$movieID = filter_input(INPUT_POST, 'movieID');

// echo "Movie ID = $movieID";

// Query the database for the movie to edit
$query = 'SELECT * FROM movielist WHERE movieID = :movie_id';
    $movie_data = $db->prepare($query);
    $movie_data->bindValue(":movie_id", $movieID);
    $movie_data->execute();
    $movie = $movie_data->fetch();
    $movie_data->closeCursor();

$releaseYear_selected = $movie['releaseYear'];
$movieRating_selected = $movie['movieRating'];

// Query the database for all moving ratings
$query = 'SELECT * FROM movie_rating ORDER BY ratingID';
        $ratings_result = $db->prepare($query);
        $ratings_result->execute();
        $ratings_result = $ratings_result->fetchAll();

// Query the database for all release years
$query = 'SELECT * FROM release_year ORDER BY releaseYear DESC';
        $release_years = $db->prepare($query);
        $release_years->execute();
        $release_years = $release_years->fetchAll();

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

<!-- The if statement in the select control selects the current variable and allows user to change it --> 
<select class="form-control input-lg" name="releaseYear">
<?php foreach ($release_years as $year) : ?>
<option <?php if( $releaseYear_selected == $year['releaseYear'] ) echo 'selected'; ?> value="<?php echo $year['releaseYear']; ?>"><?php echo $year['releaseYear']; ?></option>
<?php endforeach; ?>
</select>
</div></div><br />

<div class="form-group form-group-lg">
<div class="row">
<div class="col-lg-4">
<label for="movieRating"><b>Movie Rating:</b></label>

<!-- The if statement in the select control selects the current variable and allows user to change it -->
<select class="form-control input-lg" name="movieRating">
<?php foreach ($ratings_result as $rating) : ?>
<option <?php if( $movieRating_selected == $rating['rating'] ) echo 'selected'; ?> value="<?php echo $rating['rating']; ?>"><?php echo $rating['rating']; ?> - <?php echo $rating['rating_description']; ?></option>
<?php endforeach; ?>
</select>
</div></div><br />

<button class="btn btn-primary" type="submit">Save Changes</button>  <!-- Class required for Bootstrap css for forms -->
<button class="btn btn-default" type="reset">Reset</button> <!-- Class required for Bootstrap css for forms -->
</form>
</div> <!-- Close form-group -->

<?php include "./footer.php"; ?>

</div>
</div> <!-- Close container -->

</body>
</html>
