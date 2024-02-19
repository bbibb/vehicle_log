<!DOCTYPE html>
<html lang="en">

<!-- the head section -->
<head>

<!-- Next three lines needed to make this a responsive app in most modern browsers -->
<!-- The variables $app_URL and $app_name are set in the config.php file -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<base href=<?php echo "$app_URL"; ?> />

<!-- HTML Info about this app -->
<meta name="keywords" content="php, example program" />
<meta name="description" content="Example of a php database program for PHP class." />
<meta name="generator" content="Favorite Movie List developed by Beau Sanders" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- ADD BOOTSTRAP 3.3.7 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- the variable $papeTitle is set in each page rendering HTML -->
<title><?php echo "$pageTitle" ?></title>

</head>

<!-- the body section -->
<body>
<br />

<!-- App name at top of the page -->
<a href="<?php echo $app_URL; ?>/index.php"><h1><strong><?php echo $app_name; ?></strong></h1></a>

<!-- Bootstrap NavBar -->
<!-- <nav class="navbar navbar-default"> Use this line sets the default grey bootstrap color -->
<nav class="navbar navbar-inverse"> <!-- Use this line to set navbar to black with grey font -->
  <div class="container-fluid">
    <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	<a class="navbar-brand" href="<?php echo $app_URL; ?>/#">Movie List</a>
    </div> <!-- Close navbar-header -->
    <div class="collapse navbar-collapse" id="myNavbar">	
    <ul class="nav navbar-nav">
        <li><a href="<?php echo $app_URL; ?>/movies_add.php">Add Movie</a></li>
        <li><a href="<?php echo $app_URL; ?>/movies_search.php">Search/Edit/Delete</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo $app_URL; ?>/../index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Home</a></li>
    </ul>

    </div> <!-- Close collapse navbar-collapse -->
  </div> <!-- Close container-fluid -->
</nav>

	

	
