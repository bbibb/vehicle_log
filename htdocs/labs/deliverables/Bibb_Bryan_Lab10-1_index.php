<?php
// Bryan Bibb, Feb 27, 2024
// Program: Invoice Due Date
// Displays the invoice date, due date, and invoice date, and calculates the time interval until the due date.
//set default value

// initialize variable
$message = '';

//get value from POST array at data_test.php
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    // initial loop
    $action =  'start_app';
}

//process
switch ($action) {
    // this case provides default data for the form on first load
    case 'start_app':

        // set default invoice date 1 month prior to current date
        $interval = new DateInterval('P1M');
        $default_date = new DateTime();
        // subtract the interval from the current date to get default invoice date
        $default_date->sub($interval);
        // format the invoice date
        $invoice_date_s = $default_date->format('n/j/Y');

        // set default due date 2 months after current date
        $interval = new DateInterval('P2M');
        $default_date = new DateTime();
        // add the interval to the current date to get default due date
        $default_date->add($interval);
        // format the default due date
        $due_date_s = $default_date->format('n/j/Y');

        $message = 'Enter two dates and click on the Submit button.';
        break;
    case 'process_data':
        // variables passed from the form
        $invoice_date_s = filter_input(INPUT_POST, 'invoice_date');
        $due_date_s = filter_input(INPUT_POST, 'due_date');

        // make sure the user enters both dates
            if (empty($invoice_date_s) || empty($due_date_s)) {
                $message = 'Please enter due date and invoice date.';
                break;
        // fix an edge case where entering a single alpha character would pass the filter
            } else if (strlen($invoice_date_s) <2 || strlen($due_date_s) < 2) {
                $message = 'Incorrect format. Please try again.';
                break;
            }
        // convert date strings to DateTime objects and use a try/catch to make sure the dates are valid

            try {
                // new DateTime object with the invoice date created from the form data
                $invoice_date_o = new DateTime($invoice_date_s);
                // new DateTime object with the due date created from the form data
                $due_date_o = new DateTime($due_date_s);
            } catch (Exception $e) {
                // error message
                $message = 'Incorrect format. Please try again.';
                break;
            }

        // make sure the due date is after the invoice date
            if ($due_date_o < $invoice_date_o) {
                $message = 'The due date must be later than the invoice date. Please try again.';
                break;
            }


        // format both dates with format string, 'Month Day, Year'
        $format_string = 'F j, Y';
        $invoice_date_f = $invoice_date_o->format($format_string);
        $due_date_f = $due_date_o->format($format_string);
        
        // get the current date and time and format it
        $current_date_o = new DateTime();
        // current date with same format
        $current_date_f = $current_date_o->format($format_string);
        // time formatted with hours, minutes, seconds, am/pm
        $current_time_f = $current_date_o->format('g:i:s a');
        // get the amount of time between the current date and the due date
        // and format the due date message
            $time_span = $current_date_o->diff($due_date_o);
            // if due date is before the current date, print "overdue" message
            if ($due_date_o < $current_date_o) {
                $due_date_message = $time_span->format(
                    'This invoice is %y years, %m months, and %d days overdue.');
            // if due date is after the current date, print years, months, and days before it is due
            } else {
                $due_date_message = $time_span->format(
                    'This invoice is due in %y years, %m months, and %d days.');
            }

        break;
}
include 'date_tester.php';
?>