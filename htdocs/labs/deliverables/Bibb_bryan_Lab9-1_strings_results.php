<main>
<h2>Message:</h2>
<?php
// make sure that no errors have been encountered in the home.php page.

if (!empty($first_name) && !empty($name_clean) && !empty($email_clean) && !empty($num_clean)) {
$message = "Hello $first_name, \n
    Thank you for entering this data:\n
    Name: $name_clean
    Email: $email_clean
    Phone: $num_clean";
// if there are errors, set the default error message.

} else {
    $message = $error;
}

// print the formatted message
try {
    echo nl2br(htmlspecialchars($message));
// catch any errors (due to empty variables) and print the appropriate error. This will reflect
// the first error on the form.

} catch(Exception $e) {
    echo $error;
    echo "Invalid data. Please check and try again.";
    }
    ?>
</main>