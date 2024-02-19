<?php
require('./config/config.php');

$pageTitle = "About This Project";

?>

<div class="container"> <!-- OPEN CONTAINER -->

<?php include 'header.php'; ?>

<h3>About This Project: Favorite Movies List v1.0</h3>
<br />

<p>This is a basic single table PHP project developed over the weekend of October 21, 2017 to demonstrate to students in our CPT283 class at Greenville Tech how to use several web development tools together in order to create a simple web app. Students should review the code for this project to see how the following tools and techniques have been used in this project:</p>

<ul>
<li>PHP PDO query structure for SELECT, INSERT, UPDATE, and DELETE queries</li>
<li>Twitter's Bootstrap 3 used for look and navigation</li>
<li>mySQL now() function and PHP date() function to create the entered and modified dates in different date layouts</li>
<li>PDO SELECT query for searching the database for a random string</li>
<li>Results page page with simple "Edit Again?" button after processing the UPDATE query</li>
<li>Confirmation page before processing the DELETE query</li>
</ul>

<p>Plans are to expand on this project as time permits and add additional tables which will require more complex queries to lookup and manage data.</p>

<p>If you have any questions, please send an email to <a href="mailto:beau@beasuanders.org">beau@beausanders.org</a>.</p>

</div>  <!-- CLOSE CONTAINER -->

<?php include 'footer.php'; ?>
</body>
</html>
