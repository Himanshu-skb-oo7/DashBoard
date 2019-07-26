<?php
include "connect_to_db.php";
//SELECT Treatment_record.treatment_track_id , COUNT(Treatment_record.treatment_track_id) FROM `Treatment_record` GROUP BY Treatment_record.treatment_track_id ORDER BY COUNT(Treatment_record.treatment_track_id) DESC LIMIT 10


if($connection) {

    $return_array = [];
    $titles = array();
    $count = array();

    mysqli_query($connection,'USE dashboardDB');
    $result = mysqli_query($connection, "SELECT Skills.skill_name, COUNT(Skills.skill_id) FROM Skills JOIN UsersVsSkills ON UsersVsSkills.skill_id = Skills.skill_id GROUP BY Skills.skill_id ORDER BY COUNT(Skills.skill_id) DESC LIMIT 10");




    if(mysqli_num_rows($result)>0) {
        $i = 1;
        while($row = mysqli_fetch_assoc($result))
        {
            $temp = ["".$i, (int)$row["COUNT(Skills.skill_id)"] ] ;
            array_push($return_array, $temp);
            array_push($titles,$row["skill_name"]);
            array_push($count, (int)$row["COUNT(Skills.skill_id)"]);
            $i++;
        }

    }


    $data["array"]= json_encode($return_array);
    $data["skillsets"] = $i -1;
    $data["titles"] = $titles;
    $data["count"] = $count;

    echo json_encode($data);
}



?>
