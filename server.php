<?php

$discString= file_get_contents("dischi.json");

$discArray= json_decode($discString);

// echo var_dump($discArray)

header("Content-Type: application/json");

echo json_encode($discArray);

