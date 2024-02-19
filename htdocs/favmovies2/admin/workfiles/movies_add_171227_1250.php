<?php
require('./config/config.php');

$pageTitle = "Add a Movie";

// Query the database for all MPAA movie ratings
$query = 'SELECT * FROM movie_rating ORDER BY ratingID';
        $ratings_result = $db->prepare($query);
        $ratings_result->execute();
        $ratings_result = $ratings_result->fetchAll();

// Query the database for all release years
$query = 'SELECT * FROM release_year ORDER BY releaseYear DESC';
	$release_years = $db->prepare($query);
	$release_years->execute();
	$release_years = $release_years->fetchAll();

// Query the database for all movie genres
$query = 'SELECT * FROM genre ORDER BY movieGenre';
        $genres = $db->prepare($query);
        $genres->execute();
        $genres = $genres->fetchAll();

?>

<div class="container"> <!-- Bootstrap container -->

<?php include './header.php'; ?>

<h3>Add a Movie</h3><br />

<form class="form" name="add" method="post" action="<?php echo $app_URL; ?>/movies_process_add.php">

<div class="form-group form-group-lg"> <!-- Class required for Bootstrap css for forms -->
<div class="row"> <!-- Class required for Bootstrap css for forms -->
<div class="col-lg-4"> <!-- Class required for Bootstrap css for forms, change width by changing this class; refer to getbootstrap.com -->
<label for="title"><b>Movie Title:</b></label>
<input class="form-control input-lg" type="text" name="movieTitle" value="" placeholder="Title of the movie" /> <!-- Class required for Bootstrap css for forms -->
</div></div><br />

<!-- Cut and paster each row needed and change the variables -->

<div class="form-group form-group-lg"> 
<div class="row"> 
<div class="col-lg-4"> 
<label for="title"><b>Stars:</b></label>
<input class="form-control input-lg" type="text" name="movieStars" value="" placeholder="Actor1, Actor2, Actor3" />
</div></div><br />

<div class="form-group form-group-lg">
<div class="row">
<div class="col-lg-4">
<label for="releaseYear"><b>Release Year:</b></label>
<!-- SELECT A RELEASE YEAR FROM A LIST OF POSSIBLE YEARS IN A DATABASE TABLE -->
<select class="form-control input-lg" name="releaseYear">
                <?php foreach ($release_years as $year) : ?>
                    <option value="<?php echo $year['releaseYear']; ?>"><?php echo $year['releaseYear']; ?></option>
                <?php endforeach; ?>
                </select>
</div></div><br />

<div class="form-group form-group-lg">
<div class="row">
<div class="col-lg-4">
<label for="movieRating"><b>Movie Rating:</b></label>
<!-- SELECT MOVIE RATING FROM THOSE IN THE DATABASE TABLE -->
<select class="form-control input-lg" name="movieRating">
                <?php foreach ($ratings_result as $rating_detail) : ?>
                    <option value="<?php echo $rating_detail['rating']; ?>">
                        <?php echo $rating_detail['rating'];?> - <?php echo $rating_detail['rating_description']; ?>
                    </option>
                <?php endforeach; ?>
                </select>
</div></div><br />

<div class="form-group form-group-lg">
<div class="row">
<div class="col-lg-4">
<label for="genre"><b>Genre:</b></label>
<!-- SELECT MOVIE GENRE FROM THOSE IN THE DATABASE TABLE -->
<select class="form-control input-lg" name="movieGenre">
                <?php foreach ($genres as $genre) : ?>
                    <option value="<?php echo $genre['movieGenre']; ?>"><?php echo $genre['movieGenre'];?></option>
                <?php endforeach; ?>
                </select>
</div></div><br />

<div class="form-group form-group-lg">
<div class="row">
<div class="col-lg-4">
<label for="title"><b>IMDb Rating (Out of 10):</b></label>
<input class="form-control input-lg" type="text" name="IMDb_rating" value="" placeholder="0.0" />
</div></div><br />

<button type="submit" class="btn btn-primary">Add Movie</button> <!-- Class required for Bootstrap css for forms -->
<button type="reset" class="btn btn-default">Reset</button> <!-- Class required for Bootstrap css for forms -->
</form>

</div> <!-- Close Bootsrap form-group -->

<?php include "./footer.php"; ?>

</div> <!-- Close Bootstrap container -->

</body>
</html>
