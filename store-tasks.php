<?php

// check if the tasks is not null
if (isset($_POST['title'])) {
    // $task_title = $_POST['title']; // salvo la task

    // create a new task array
    $task = [
        'title' => $_POST['title'],
        'done' => false
    ];

    // read the json file and return it as ana assoc array
    $tasks_json = file_get_contents(('list.json'));
    $tasks_array = json_decode($tasks_json, true);

    // push the new task in the task array
    array_unshift($tasks_array, $task);
    // encode array in json
    $tasks_json = json_encode($tasks_array);

    // update the json file using file_put_contents
    file_put_contents('list.json', $tasks_json);

    // echo json file
    echo $tasks_json;
}
