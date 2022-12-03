<?php

require __DIR__ . './functions.php';

if (isset($_POST['title'])) {

    // create a new task as an associative array
    $new_task = [
        'title' => $_POST['title'],
        'done' => 'false'
    ];

    // read json file and convert it in assoc array
    $tasks = read_data('tasks.json');

    // push the new task into array
    array_push($tasks, $new_task);

    // transform the tasks array into a json and save
    $tasks_json = tranform_array_to_json_and_save($tasks, 'tasks.json');

    header("Content-Type: application/json");
    // return json file updated
    echo $tasks_json;
} else {
    echo 'Error';
}
