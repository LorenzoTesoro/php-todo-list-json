<?php

$string = file_get_contents('list.json'); // prendo il file json

$tasks = json_decode($string, true); // traduco in php il file json = array php

header('Content-Type: application/json');

echo json_encode($tasks); // traduco da php a json in modo tale che i dati possano essere "consumati" da vue.js
