<?php

$return_array = [
    ["Popular 2", 10],
    ["Popular 5", 6],
    ["Popular 3", 9],
    ["Popular 6", 5],
    ["Popular 9", 1],
    ["Popular 8", 3],
    ["Popular 1", 11],
    ["Popular 7", 4],
    ["Popular 4", 8],
];


$data["array"]= json_encode($return_array);
$data["message_volume"] = 967;
$data["alert_volume"] = 1256;
$data["patients"] = 89;
$data["alert_by_type"] = 1256;
$data["messsages_by_clinician"] = 967;

echo json_encode($data);
?>
