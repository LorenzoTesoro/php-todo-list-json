<?php

require __DIR__ . '/functions.php';

if (isset($_POST['task_index']) && isset($_POST['done'])) {
    $task_index = $_POST['task_index'];
    $task_status = boolval($_POST['done']);

    // read the json file and transform it as an assoc array
    $tasks_array = read_data('tasks.json');

    if ($tasks_array[$task_index]["done"] === false) {
        $tasks_array[$task_index]["done"] = $task_status;
    } else {
        $tasks_array[$task_index]["done"] = !$task_status;
    }

    header("Content-Type: application/json");
    echo tranform_array_to_json_and_save($tasks_array, 'tasks.json');
}
