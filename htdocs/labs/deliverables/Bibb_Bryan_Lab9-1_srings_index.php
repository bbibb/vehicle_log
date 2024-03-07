<?php
// Bryan Bibb, Feb 22, 2024, CPT283-W01
// Program: String Tester
// Purpose: This application receives user input for name, email address, and phone number.
//          It normalizes, formats, and validates user input data for display.
// Related: string_tester.php


//set default values
$name = '';
$email = '';
$phone = '';
$message = 'Enter data and click on the Submit button.';

//process user input and save to _POST array
// reset button code

$action = filter_input(INPUT_POST, 'action');

// I'm not sure why there is a switch here since there is only one case. However, you could add other
// action buttons such as reset or email.
switch ($action) {
    // input filtering for safety
    case 'process_data':
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $phone = filter_input(INPUT_POST, 'phone');

        /*************************************************
         * validate and process the name
         ************************************************/
// check to see if the name field contains user entry and trim whitespace
        if (is_string($name) && !empty($name)) {
            $name_clean = trim($name);
// extract the first name from the entry and capitalize the first character
            $length = strlen($name_clean);
            //            echo $length;
// $sp searches for the index of the first space character
            $sp = strpos($name_clean, ' ');
// $rl finds the length of the first name
            $rl = $length - ($sp + 1);
// create a $first_name variable that has the characters up to the first space character
            $first_name = substr($name, 0, $sp);
// only the first character in upper case
            $first_name = ucfirst(strtolower($first_name));

// if the form data only contains one name, just use that one.
            if (empty($first_name)) {
                $first_name = ucfirst(strtolower($name_clean));
            }

// error message if the field is empty;
        } else {
            $error = "Please enter a valid name";
            break;
        }
        /*************************************************
         * validate and process the email address
         ************************************************/
// make sure the email field contains one @ and one . character.
        if (str_contains($email, '@') && (str_contains($email, '.'))) {
            $email_clean = trim($email);
//            echo $email_clean;
// error message if the field is not valid
        } else {
            $error = "Please enter a valid email";
            break;
        }

//        This would be better, probably:
//        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//            $email_clean = trim($email);
//        }

        /*************************************************
         * validate and process the phone number
         ************************************************/
// split the entered data into a new string, including only the numeric characters
        $num_normal = '';
        foreach (str_split($phone) as $char) {
            if (is_numeric($char)) {
                $num_normal .= $char;
            }
//        echo $num_normal;
        }
// process the new string to include dashes between the parts of the number
        $length = strlen($num_normal);
//        echo $length;
// include area code if present
        if ($length == 10) {
            $num_clean = substr($num_normal, 0, 3) . '-' . substr($num_normal, 3, 3)
                . '-' . substr($num_normal, 6, 4);
//            echo $num_clean;
// do not include area code
        }else if ($length == 7) {
            $num_clean = substr($num_normal, 0, 3) . '-' . substr($num_normal, 3, 4);
//            echo $num_clean;
// error message if the number does not have the correct number of numeric digits
        } else {
            $error = "Please enter a valid phone number.";
            break;
        }
}

//        /*************************************************
//         * Display the validation message
//         ************************************************/
//        $message = "This page is under construction.\n" .
//                   "Please write the code that processes the data.";

// HTML form
include 'string_tester.php';
