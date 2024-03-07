<?php
// Bryan Bibb, Mar 7, 2023, CPT283-W01
// Task List Manager application
// Purpose: This application manages task lists, allowing the user to create, modify, promote,
//          and sort tasks in their list. Uses arrays and array methods for its operation.

//get tasklist array from POST
$task_list = filter_input(INPUT_POST, 'tasklist', 
        FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
if ($task_list === NULL) {
    $task_list = [];
    
//    add some hard-coded starting values to make testing easier
//    $task_list[] = 'Write chapter';
//    $task_list[] = 'Edit chapter';
//    $task_list[] = 'Proofread chapter';
}

//get action variable from POST
$action = filter_input(INPUT_POST, 'action');

//initialize error messages array
$errors = [];

//process
switch( $action ) {
// tests the value for the submit button
    case 'Add Task':
        $new_task = filter_input(INPUT_POST, 'newtask');
        if (empty($new_task)) {
            $errors[] = 'The new task cannot be empty.';
        } else {
//            $task_list[] = $new_task;
// array_push() puts the new task at the end of the $task_list array
            array_push($task_list, $new_task);
        }
        break;
    case 'Delete Task':
        $task_index = filter_input(INPUT_POST, 'taskid', FILTER_VALIDATE_INT);
        if ($task_index === NULL || $task_index === FALSE) {
            $errors[] = 'The task cannot be deleted.';
        } else {
// unset() deletes the task_list value from the array
            unset($task_list[$task_index]);
// array_values() reindexes the array to eliminate the "hole" left by unset()
            $task_list = array_values($task_list);
        }
        break;

    case 'Modify Task':
        $task_index = filter_input(INPUT_POST, 'taskid', FILTER_VALIDATE_INT);
        if ($task_index === NULL || $task_index === FALSE) {
            $errors[] = "The task cannot be modified.";
// $task_to_modify is the value at the given $task_index
        } else {
            $task_to_modify = $task_list[$task_index];
        }

// write out the modification
    case 'Save Changes':
        $i = filter_input(INPUT_POST, 'modifiedtaskid', FILTER_VALIDATE_INT);
// input text of the edited task
        $modified_task = filter_input(INPUT_POST, 'modifiedtask');
        if (empty($modified_task)) {
            $errors[] = 'The modified task cannot be empty.';
        } elseif($i === NULL || $i === FALSE) {
            $errors[] = 'The task cannot be modified.';
        } else {
// if no errors, set the $task_list item at $i index to the text of $modified_task
            $task_list[$i] = $modified_task;
// reset the $modified_task variable
            $modified_task = '';
        }
        break;
    case 'Cancel Changes':
// reset the $modified_task variable
        $modified_task = '';
        break;

// move selected task up one spot in the array
    case 'Promote Task':
        $task_index = filter_input(INPUT_POST, 'taskid', FILTER_VALIDATE_INT);
        if ($task_index === NULL || $task_index === FALSE) {
            $errors[] = 'The task cannot be promoted.';
        } elseif ($task_index == 0) {
            $errors[] = 'You can\'t promote the first task.';
        } else {
            // get the values for the two indexes
            $task_value = $task_list[$task_index];
            $prior_task_value = $task_list[$task_index-1];

            // swap the values
            $task_list[$task_index-1] = $task_value;
            $task_list[$task_index] = $prior_task_value;
            break;
        }
// default sort algorithm
    case 'Sort Tasks':
        sort($task_list);
        break;
}
// reload the list
include('task_list.php');
?>