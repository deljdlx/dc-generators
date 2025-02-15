<?php

$data = [
    'Lundi' => rand(0, 100),
    'Mardi' => rand(0, 100),
    'Mercredi' => rand(0, 100),
    'Jeudi' => rand(0, 100),
    'Vendredi' => rand(0, 100),
    'Samedi' => rand(0, 100),
    'Dimanche' => rand(0, 100),
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
