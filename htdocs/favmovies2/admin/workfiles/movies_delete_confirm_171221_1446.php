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
<button type="submit" class="btn btn-danger">Yes, delete this movie</button>
</form>

<div style='float:left'>
<form action="movies_list.php" method="POST" id="movies_list">
<input type="hidden" name="movieID" value="" />
<button type="submit" class="btn btn-success">No, do NOT delete this move</button>
</form>
</div>
<br />
<br />

<?php include 'footer.php'; ?>
</div>  <!-- Close Bootstrap container -->
</body>
</html>
