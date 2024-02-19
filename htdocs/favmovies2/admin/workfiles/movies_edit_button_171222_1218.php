<!-- This is a separate file so it can be reused; similar to a function -->

<div style='float:left'>
<form action="movies_edit.php" method="POST" id="movies_edit">
<input type="hidden" name="movieID" value="<?php echo $movie['movieID']; ?>" />
<!-- Following link uses Bootstrap 3 syntax for blue colored button -->
<button type="submit" class="btn btn-primary">Edit</button>
</form>
</div>
