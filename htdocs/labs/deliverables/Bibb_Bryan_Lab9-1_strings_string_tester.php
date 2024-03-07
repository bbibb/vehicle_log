<!DOCTYPE html>
<!-- HTML form to receive user input -->

<html>
<head>
    <title>String Tester</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>

<div><br></div>
    <main>
        <h1>String Tester</h1>
        <form action="." method="post" >
        <input type="hidden" name="action" value="process_data">

        <label>Name:</label>
        <input type="text" name="name" 
               value="<?php echo htmlspecialchars($name); ?>">
        <br>

        <label>E-Mail:</label>
        <input type="text" name="email" 
               value="<?php echo htmlspecialchars($email); ?>">
        <br>

        <label>Phone Number:</label>
        <input type="text" name="phone" 
               value="<?php echo htmlspecialchars($phone); ?>">
        <br>

        <label>&nbsp;</label>
        <input type="submit" name="submit" value="Submit">
        <br>
        <p><?php echo nl2br(htmlspecialchars($message)); ?></p>
    </main>
    <div><br></div>

</body>
</html>

<?php
// Test to see if the $_POST data has been filled in or not. This prevents the page from showing an error
// on the initial load.
// Once $_POST data is present, load the formatted results.
    if (!empty($_POST)) {
        include('results.php');
    }
    ?>