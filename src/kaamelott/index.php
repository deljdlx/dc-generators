<?php
require_once '../vendor/autoload.php';

$quoteNumber = 1;

if(isset($_GET['n'])) {
    $quoteNumber = intval($_GET['n']);
}

$quotes = json_decode(file_get_contents(__DIR__ . '/kaamelott.json'), true);

$data = [];

$max = count($quotes['citation']) - 1;

for($i = 0; $i < $quoteNumber; $i++) {
    $data[] = $quotes['citation'][rand(0, $max)];
}



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