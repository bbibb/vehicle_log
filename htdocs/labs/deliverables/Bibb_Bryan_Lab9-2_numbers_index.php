<?php
// Bryan Bibb, Feb 22, 2024, CPT283-W01
// Program: Number Tester
// Purpose: This application receives user input for three numbers and performs a series
//          of mathematical operations, returning ceiling and floor values, rounded number,
//          max and min values, and a random number.
// Related: number_tester.php

//set default values for the form
$number1 = 78;
$number2 = -105.33;
$number3 = 0.0049;
$message = 'Enter some numbers and click on the Submit button.';

//process
$action = filter_input(INPUT_POST, 'action');
// I'm not sure why this is a switch, but anyway.
switch ($action) {
    // filter incoming data for security.
    case 'process_data':
        $number1 = filter_input(INPUT_POST, 'number1');
        $number2 = filter_input(INPUT_POST, 'number2');
        $number3 = filter_input(INPUT_POST, 'number3');

        // make sure the user enters three valid numbers
        if (!empty($number1) && !empty($number2) && !empty($number3)
            && is_numeric($number1) && is_numeric($number2) && is_numeric($number3)) {

            // get the ceiling and floor for $number2
            $num2_ceil = ceil($number2);
            $num2_floor = floor($number2);

            // round $number3 to 3 decimal places
            $num3_round = round($number3, 3);

            // get the max and min values of all three numbers
            $num_max = max($number1, $number2, $number3);
            $num_min = min($number1, $number2, $number3);

            // generate a random integer between 1 and 100
            $num_rand = rand(1, 100);

        }
// message for printing with labels and calculated values
        $message =
            "Number 1: $number1\n" .
            "Number 2: $number2\n" .
            "Number 3: $number3\n" .
            "\n" .
            "Number 2 ceiling: $num2_ceil\n" .
            "Number 2 floor: $num2_floor\n" .
            "Number 3 rounded: $num3_round\n" .
            "\n" .
            "Min: $num_min\n" .
            "Max: $num_max\n" .
            "\n" .
            "Random: $num_rand\n";

        break;
}
// load HTML presentation layer
include 'number_tester.php';
?>