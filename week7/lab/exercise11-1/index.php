<?php
if (isset($_POST['tasklist'])) {
    $task_list = $_POST['tasklist'];
} else {
    $task_list = array();
    // some hard-coded starting values to make testing easier
    $task_list[] = 'Write chapter';
    $task_list[] = 'Edit chapter';
    $task_list[] = 'Proofread chapter';
}
$errors = array();
switch( $_POST['action'] ) {
    case 'Add Task':
        $new_task = $_POST['newtask'];
        if (empty($new_task)) {
            $errors[] = 'The new task cannot be empty.';
        } else {
            array_push($task_list, $new_task);
        }
        break;
    case 'Delete Task':
        $task_index = $_POST['taskid'];
        unset($task_list[$task_index]);
        $task_list = array_values($task_list);
        break;
    case 'Modify Task':
        $task_index = $_POST['taskid'];
        $task_to_modify = $task_list[$task_index];
        $task_list = array_values($task_list);
        break;
      case 'Save Changes':
        $i = $_POST['modifiedtaskid'];
        $modified_task = $_POST['modifiedtask'];
        if (empty($modified_task)) {
            $errors[] = 'Modified task cannot be empty.';
             } else {
                 $task_list[$i] = $modified_task;
                 $modified_task = '';
             }     
              break; 
    case 'Cancel Changes':
        $modified_task = '';
        break;
    
    case 'Promote Task':
        $task_index = $_POST['taskid'];
        if ($task_index == 0) {
            $errors[] = 'You can\'t promote the first task.';
        }   else {
            $task_value = $task_list[$task_index];
            $prior_task_value = $task_list[$task_index-1];
            
            // changes the location of the values in the array
            $task_list[$task_index-1] = $task_value;
            $task_list[$task_index] = $prior_task_value;
            break;
            }
            // sorts the task in ascending order
    case 'Sort Task';
            sort($task_list);
            break;
       
    
}
include('task_list.php');
?>