<?php

$string = file_get_contents('list.json');

$tasks = json_decode($string, true);

header('Content-Type: application/json');

echo json_encode($tasks);
