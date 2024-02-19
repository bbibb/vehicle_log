<?php
require('./config/config.php');

$pageTitle = "Add a Movie";
?>


<div class="container"> <!-- Bootstrap container -->

<?php include './header.php'; ?>

<h3>Add a Movie</h3><br />

<form class="form" name="add" method="post" action="movies_process_add.php">

<div class="form-group form-group-lg"> <!-- Class required for Bootstrap css for forms -->
<div class="row"> <!-- Class required for Bootstrap css for forms -->
<div class="col-lg-4"> <!-- Class required for Bootstrap css for forms, change width by changing this class; refer to getbootstrap.com -->
<label for="title"><b>Movie Title:</b></label>
<input class="form-control input-lg" type="text" name="movieTitle" value="" placeholder="Title of the movie" /> <!-- Class required for Bootstrap css for forms -->
</div></div><br />

<!-- Cut and paste each column needed and change the variables -->

<div class="form-group form-group-lg">
<div class="row">
<div class="col-lg-4">
<label for="releaseYear"><b>Release Year:</b></label>
<input class="form-control input-lg" type="text" name="releaseYear" value="" placeholder="Year the movie was released" />
</div></div><br />

<div class="form-group form-group-lg">
<div class="row">
<div class="col-lg-4">
<label for="movieRating"><b>Movie Rating:</b></label>
<input class="form-control input-lg" type="text" name="movieRating" value="" placeholder="MPAA Rating (G, PG, PG-13, R, etc)" />
</div></div><br />

<input class="btn btn-default" type="submit" value="Add"> <!-- Class required for Bootstrap css for forms -->
<input class="btn btn-default" type="reset" name="reset" value="Reset"> <!-- Class required for Bootstrap css for forms -->
</form>

</div> <!-- Close Bootsrap form-group -->

<?php include "./footer.php"; ?>

</div> <!-- Close Bootstrap container -->

</body>
</html>
