<?php

$string = file_get_contents('list.json');

$tasks = json_decode($string, true);

header('Content-Type: application/json');

echo json_encode($tasks);

if (isset($_POST)) {

    $json_string = json_encode($_POST['new_task']);

    file_put_contents('list.json', $json_string);
}
