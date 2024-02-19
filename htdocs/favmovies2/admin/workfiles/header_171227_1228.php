<!-- THIS IS THE HEADER FOR THE ADMIN SECTION OF THIS APP -->

<!DOCTYPE html>
<html lang="en">

<!-- the head section -->
<head>

<!-- Next three lines needed to make this a responsive app in most modern browsers -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<base href=<?php echo "$app_URL"; ?> />

<!-- HTML Info about this app -->
<meta name="keywords" content="php, single table, example program" />
<meta name="description" content="Example of a simple single table php program for PHP class." />
<meta name="generator" content="Favorit Movie List developed by Beau Sanders" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- ADD BOOTSTRAP 3.3.7 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title><?php echo "ADMIN-$pageTitle" ?></title>

</head>

<!-- the body section -->
<body>
<br />

<!-- App name at top of the page with URL to index.php -->
<a href="<?php echo $app_URL; ?>index.php"><h1><strong><?php echo $app_name; ?></strong></h1>

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
	<a class="navbar-brand" href="#">Movie List</a>
    </div> <!-- Close navbar-header -->
    <div class="collapse navbar-collapse" id="myNavbar">	
    <ul class="nav navbar-nav">
        <li><a href="<?php echo $app_URL; ?>/movies_add.php">Add Movie</a></li>
        <li><a href="<?php echo $app_URL; ?>/movies_search.php">Search/Edit/Delete</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Home</a></li>
      <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->	
    </ul>
    </div> <!-- Close collapse navbar-collapse -->
  </div> <!-- Close container-fluid -->
</nav>

