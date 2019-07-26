<?php

session_start();

$_SESSION["first_name"] = $_POST["first_name"];;
$_SESSION["last_name"] = $_POST["last_name"];
$_SESSION["skillset_select"] = $_POST["skillset_select"];
$_SESSION["start_date"] = $_POST["start_date"];
$_SESSION["end_date"] = $_POST["end_date"];
$_SESSION["role_id"] = $_POST["role_id"];
$_SESSION["active_status"] = $_POST["active_status"];
$_SESSION["inactive_status"] = $_POST["inactive_status"];

?>