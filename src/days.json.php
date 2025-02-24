<?php

// $data = [
//     'Lundi' => rand(0, 100),
//     'Mardi' => rand(0, 100),
//     'Mercredi' => rand(0, 100),
//     'Jeudi' => rand(0, 100),
//     'Vendredi' => rand(0, 100),
//     'Samedi' => rand(0, 100),
//     'Dimanche' => rand(0, 100),
// ];

$data = [
    [
        'caption' => 'Sunday',
        'day-index' => 0,
        'value' => rand(0, 100),
    ],
    [
        'caption' => 'Monday',
        'day-index' => 1,
        'value' => rand(0, 100),
    ],
    [
        'caption' => 'Tuesday',
        'day-index' => 2,
        'value' => rand(0, 100),
    ],
    [
        'caption' => 'Wednesday',
        'day-index' => 3,
        'value' => rand(0, 100),
    ],
    [
        'caption' => 'Thursday',
        'day-index' => 4,
        'value' => rand(0, 100),
    ],
    [
        'caption' => 'Friday',
        'day-index' => 5,
        'value' => rand(0, 100),
    ],
    [
        'caption' => 'Saturday',
        'day-index' => 6,
        'value' => rand(0, 100),
    ],
];

header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token, Authorization");
header("Access-Control-Allow-Credentials: true");
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}
echo json_encode($data, JSON_PRETTY_PRINT);
