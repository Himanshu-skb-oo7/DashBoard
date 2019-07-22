<?php

session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'connect_to_db.php';




$filtered_records= array();
$data["filtered_items"]="";
$query_condition = "";
$query_condition_skill = "";

$page_no = $_POST["page_num"];

if(isset($_SESSION["first_name"]) and $_SESSION["first_name"] != '')
    $query_condition .= " WHERE Users.first_name = '".$_SESSION["first_name"]."'" ;

if(isset($_SESSION["last_name"]) and $_SESSION["last_name"] != '')
    $query_condition .= " AND Users.last_name  = '".$_SESSION["last_name"]."'" ;

if(isset($_SESSION["skillset_select"]) and $_SESSION["skillset_select"] != '')
{
    $query_condition_skill = " AND ( Skills.skill_id = ".$_SESSION["skillset_select"][0] ;

    for( $i = 1; $i < count($_SESSION["skillset_select"]); $i++ )
        $query_condition_skill .= " OR Skills.skill_id = ".$_SESSION["skillset_select"][$i] ;

    $query_condition_skill.=" )";
}

if(isset($_SESSION["start_date"]) and $_SESSION["start_date"] != '' and isset($_SESSION["end_date"]) and $_SESSION["end_date"] != '')
{
    $query_condition .= " AND ( Users.date_added BETWEEN '".$_SESSION["start_date"]."' AND '".$_SESSION["end_date"]."' )" ;
}

if(isset($_SESSION["role_id"]) and $_SESSION["role_id"] != '')
{
    $query_condition .= " AND Users.role_id = ".$_SESSION["role_id"];
}

if(isset($_SESSION["status_bit"]) and $_SESSION["status_bit"] != '')
    $query_condition .= " AND Users.status_bit = ".$_SESSION["status_bit"] ;

if(!(isset($_SESSION["first_name"]) and $_SESSION["first_name"] != '') and $query_condition != "")
    $query_condition = " WHERE ".substr($query_condition,4);


if($connection)
{
    mysqli_query($connection, 'use dashboardDB');
    $result = mysqli_query($connection, "SELECT * FROM `Users` JOIN Roles ON Roles.role_id = Users.role_id ".$query_condition);

    if(mysqli_num_rows($result)>0){


        while($row = mysqli_fetch_assoc($result))
        {

            $temp = array();



            $user_name= $row["first_name"]." ".$row["last_name"];
            array_push($temp,$user_name);


            $skillSet = array();
            $temp_user_id = $row["user_id"];


            $skillSet_result = mysqli_query($connection, "select * from UsersVsSkills JOIN Skills ON Skills.skill_id = UsersVsSkills.skill_id where UsersVsSkills.user_id= $temp_user_id ".$query_condition_skill);

            if(mysqli_num_rows($skillSet_result)) {
                while($roww = mysqli_fetch_assoc($skillSet_result))
                {
                    array_push($skillSet,$roww["skill_name"]);
                }
            } else {
                continue;
            }




            array_push($temp, $skillSet);

            $temp_role_id = $row["role_id"];
            $role_result = mysqli_query($connection, "SELECT * from Roles where role_id = $temp_role_id ");
            while($roww = mysqli_fetch_assoc($role_result))
                array_push($temp,$roww["role_name"]);

            array_push($temp,$row["date_added"]);
            array_push($temp,$row["added_by"]);
            array_push($temp,$row["status_bit"]);
            array_push($filtered_records, $temp);


        }
    }
}

for ($i = ($page_no-1)*10; $i < min($page_no*10,count($filtered_records)); $i++) {
    $data["filtered_items"] .= " <div class='row'>";
    for ($j = 0; $j < count($filtered_records[0]); $j++) {
        if ($j == 1) {
            $str = "";
            for ($k = 0; $k < count($filtered_records[$i][$j]); $k++) {
                $str = $str . $filtered_records[$i][$j][$k];

                if ($k != count($filtered_records[$i][$j]) - 1)
                    $str = $str . " | ";

            }
            $data["filtered_items"] = $data["filtered_items"]."<div class='col-2'> " . $str . "</div>";
        } else {

            if($j == count($filtered_records[0])-1 ) {
                if($filtered_records[$i][$j] == 1)
                    $data["filtered_items"] = $data["filtered_items"]."<div class='col-2'> <button class='active-btn'>ACTIVE</button> </div>";
                else
                    $data["filtered_items"] = $data["filtered_items"]."<div class='col-2'> <button class='inactive-btn'>INACTIVE</button> </div>";

            } else {
                $data["filtered_items"] = $data["filtered_items"]."<div class='col-2'> " . $filtered_records[$i][$j] . "</div>";
            }

        }
    }
    $data["filtered_items"] = $data["filtered_items"]."</div>";
}

$data["total_records"] = count($filtered_records);

echo json_encode($data);


?>