<?php 
require('./config/config.php');

// NOTE: This is a confirmation page to allow the user to change their mind before deleting a record

// Retrieve information from _POST array
$movieID = filter_input(INPUT_POST, 'movieID');

// echo "Movie ID = $movieID";

// The $pageTitle variable is shown in the browser tab; refer to header.php to see where it is called
$pageTitle = "Delete Confirmation";

?>

<div class="container"> <!-- Open Bootstrap container -->

<?php include 'header.php'; ?>

<h3>Are you sure you want to delete this movie?</h3>
<br />
   
<div style='float:left'>
<form action="movies_delete.php" method="POST" id="movies_delist">
<input type="hidden" name="movieID" value="<?php echo $movieID; ?>" />
<input type="submit" value="Yes, delete this movie" />
</form>

<div style='float:left'>
<form action="movies_list.php" method="POST" id="movies_list">
<input type="hidden" name="movieID" value="" />
<input type="submit" value="No, do NOT delete this move" />
</form>
</div>
<br />

<?php include 'footer.php'; ?>
</div>  <!-- Close Bootstrap container -->
</body>
</html>
