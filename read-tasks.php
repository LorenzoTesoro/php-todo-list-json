<?php
// take data from json file
$tasks = file_get_contents('tasks.json');

header('Content-Type:application/json');

echo $tasks;
