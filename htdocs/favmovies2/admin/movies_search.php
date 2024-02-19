<?php
require('./config/config.php');

$pageTitle = "Search";

?>

<div class="container">

<?php include('./header.php'); ?>

<h3>Search for a Movie</h3>
<ul>
<li>Search all of the records in our database</li>
<li>You will be able to Edit and Delete the movie(s) in your search result</li>
<li>When searching for entered and modifed dates use the YYYY-MM-DD date format</li>
</ul>

<br />
<form action="<?php echo $app_URL; ?>/movies_process_search.php" method="POST" id="search_string">
<div class="form-group form-group-lg"> <!-- Class required for Bootstrap css for forms -->
<div class="row"> <!-- Class required for Bootstrap css for forms -->
<div class="col-lg-4"> <!-- Class required for Bootstrap css for forms, change width by changing this class; refer to getbootstrap.com -->
<label for="searchfor">Search for:</label>
<input class="form-control input-lg" id="searchfor" type="input" name="search_string" placeholder="Enter something to lookup" />
</div></div><br />

<!-- Class and button tag required for Bootstrap css for buttons and forms -->
<button class="btn btn-primary" type="submit">Run the Search</button> 
<br /><br />
<!-- Interesting syntax to get a URL embedded in a Bootstrap button -->
<input type="button" class="btn btn-primary" value="Edit from the Movie List" onclick="location.href = '<?php echo $app_URL; ?>/movies_edit_list.php';">

</div></div>
</form>
</div> <!-- Close form-group -->

<?php include "./footer.php"; ?>

</div> <!-- Close container -->

</body>
</html>
