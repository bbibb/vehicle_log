<!-- This is a separate file so it can be reused; similar to a function -->

<div style='float:left'>
<form action="movies_delete_confirm.php" method="POST" id="movies_delete_confirm">
<input type="hidden" name="movieID" value="<?php echo $movie['movieID']; ?>" />
<button type="submit" class="btn btn-danger">Delete</button>
</form>
