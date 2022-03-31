<?php

require_once 'Input/InputOperations.php';
require_once 'Output/OutputOperations.php';

$InfoClass = new InputOperations();
$conn = $InfoClass->connectDatabase();
if($conn->connect_error) {
    print("Error: " . mysqli_connect_error());
}

if($result = $InfoClass->getInfoFromTable($conn)) {
    $output = new OutputOperations();
    $output->outputValues($result);
}