<?php

require __DIR__ . './functions.php';

if (isset($_POST['title'])) {

    // create a new task as an associative array
    $new_task = [
        'title' => $_POST['title'],
        'done' => false
    ];

    // read json file and convert it in assoc array
    $tasks = read_data('tasks.json');

    // push the new task into array
    array_push($tasks, $new_task);

    header("Content-Type: application/json");
    // return json file updated
    echo tranform_array_to_json_and_save($tasks, 'tasks.json');
}
