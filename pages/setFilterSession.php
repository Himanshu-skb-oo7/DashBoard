<?php

session_start();

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$skillset_select = $_POST["skillset_select"];
$start_date = $_POST["start_date"];
$end_date = $_POST["end_date"];
$role_id = $_POST["role_id"];
$status_bit = $_POST["status_bit"];

$_SESSION["first_name"] = $first_name;
$_SESSION["last_name"] = $last_name;
$_SESSION["skillset_select"] = $skillset_select;
$_SESSION["start_date"] = $start_date;
$_SESSION["end_date"] = $end_date;
$_SESSION["role_id"] = $role_id;
$_SESSION["status_bit"] = $status_bit;

?>