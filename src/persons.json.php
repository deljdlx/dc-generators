<?php
require_once 'vendor/autoload.php';

$data = [
    'values' => [],
];

$faker = Faker\Factory::create();

$genders = [
    'male',
    'female',
    'unknow',
];


for($i = 0 ; $i < 100 ; $i++) {
    $gender = $genders[rand(0, count($genders) - 1)];
    $data['values'][] = [
        'id' => $faker->buildingNumber(),
        'gender' => $gender,
        'first_name' => $faker->firstName($gender),
        'last_name' => $faker->lastName($gender),
        'birth_date' => $faker->date('Y-m-d', 'now - 20 years'),
        'address' => $faker->address(),
        'town' => $faker->city(),
        'email' => $faker->email(),
        'phone' => $faker->phoneNumber(),
        'random_bool' => [
            $faker->boolean(),
            $faker->boolean(),
            $faker->boolean(),
            $faker->boolean(),
            $faker->boolean(),
        ],
        'random_int_0_100' => [
            $faker->numberBetween(0, 100),
            $faker->numberBetween(0, 100),
            $faker->numberBetween(0, 100),
            $faker->numberBetween(0, 100),
        ],
        'random_int_0_5' => [
            $faker->numberBetween(0, 5),
            $faker->numberBetween(0, 5),
            $faker->numberBetween(0, 5),
            $faker->numberBetween(0, 5),
        ]

    ];
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