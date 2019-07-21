<?php

$return_array = [
    ["Popular 2", 10],
    ["Popular 5", 6],
    ["Popular 3", 9.5],
    ["Popular 6", 5.75],
    ["Popular 9", 1.20],
    ["Popular 8", 3.5],
    ["Popular 1", 11],
    ["Popular 7", 4],
    ["Popular 4", 8],
];


$data["array"]= json_encode($return_array);
$data["product"] = 1;

echo json_encode($data);
?>
