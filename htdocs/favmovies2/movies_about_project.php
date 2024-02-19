<?php
require('./config/config.php');

$pageTitle = "About This Project";

?>

<div class="container"> <!-- OPEN CONTAINER -->

<?php include 'header.php'; ?>

<h3>About This Project: Favorite Movies List v2.0</h3>

<p><b>Version 1.0:</b> This is a basic single table PHP project developed over the weekend of October 21, 2017 to demonstrate to students in our CPT283 class at Greenville Tech how to use several web development tools together in order to create a simple web app. Students should review the code for this project to see how the following tools and techniques have been used in this project:</p>

<ul>
<li>PHP PDO query structure for SELECT, INSERT, UPDATE, and DELETE queries</li>
<li>Twitter's Bootstrap 3 used for look and navigation</li>
<li>mySQL now() function and PHP date() function to create the entered and modified dates in different date layouts</li>
<li>PDO SELECT query for searching the database for a random string</li>
<li>Results page page with simple "Edit Again?" button after processing the UPDATE query</li>
<li>Confirmation page before processing the DELETE query</li>
</ul>

<p><b>Version 2.0:</b> Updated and expanded during the Winter Break in December 2017. New features and enhancements include:

<ul>
<li>Added variables and functions to the config.php file</li>
<li>Added authentication for the administrative user (admin) and moved delete to admin only</li>
<li>Added Bootstrap 3 colored buttons for forms and URL links</li>
<li>Changed Release Year and Movie Rating to separate static tables in the database</li>
<li>Added Stars, Genre, and IMDb Rating to the app, including static tables for Genre</li>
<li>Changed input form control to select form control for the Release Year, Movie Rating, and Genre variables on the Add and Edit screens</li>
<li>Enhanced the Edit screens to highlight the current variable when editing in the select control</li>
<li>Confirmation of movie added to database with option to edit new record
<li>Modified admin delete confirmation page to include the name of the movie about to be deleted</li>
<li>Added movie count query to config.php so output can be accessed on all pages if wanted</li>
<li>Created movie details report for each movie with links on the movie list page</li>
<li>Implemented $app_URL and $app_root variables set in config.php to better control links in app navigation</li>
<li>Changed app name above navigation bar to a link to the index.php file for either the app or the admin section for the app</li> 
<li>Used various date function display formats for date added and date modified to demonstrate flexible date formats</li> 
<li>Added more developer documentation to the separate pages</li> 
</ul>

<p>If you have any questions, please send an email to <a href="mailto:beau@beasuanders.org">beau@beausanders.org</a>.</p>

<p>Late Updated: 12/27/2017 at 2:39 PM</p>

</div>  <!-- CLOSE CONTAINER -->

<?php include 'footer.php'; ?>
</body>
</html>
