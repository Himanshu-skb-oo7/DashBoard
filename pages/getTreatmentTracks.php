<?php
include "connect_to_db.php";
//SELECT Treatment_record.treatment_track_id , COUNT(Treatment_record.treatment_track_id) FROM `Treatment_record` GROUP BY Treatment_record.treatment_track_id ORDER BY COUNT(Treatment_record.treatment_track_id) DESC LIMIT 10


if($connection) {
    $return_array = [];
    mysqli_query($connection,'USE dashboardDB');
    $result = mysqli_query($connection, "SELECT Treatment_record.treatment_track_id, Treatment_tracks.treatment_track_name , COUNT(Treatment_record.treatment_track_id) FROM `Treatment_record` JOIN Treatment_tracks on Treatment_tracks.treatment_track_id = Treatment_record.treatment_track_id GROUP BY Treatment_record.treatment_track_id ORDER BY COUNT(Treatment_record.treatment_track_id) DESC LIMIT 10");



    if(mysqli_num_rows($result)>0) {
        while($row = mysqli_fetch_assoc($result))
        {
            $temp = [$row["treatment_track_name"], (int)$row["COUNT(Treatment_record.treatment_track_id)"] ] ;
            array_push($return_array, $temp);
        }
    }


    $data["array"]= json_encode($return_array);
    $data["product"] = 1;
    echo json_encode($data);
}



?>
