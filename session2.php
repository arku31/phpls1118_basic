<?php
session_start();

echo '<pre>';
echo 'Hello, '.$_SESSION['login'];
//1. session
//2. GET/POST, $_POST, $_GET

$array = [
    'asd' => [
        'new' => [ 'asd' => 'asd']
    ],
];

$array['asd']['new']['xxx'] = 'sfdgfdsg';

print_r($array);

