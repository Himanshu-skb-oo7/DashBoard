<?php
include "connect_to_db.php";
//SELECT Treatment_record.treatment_track_id , COUNT(Treatment_record.treatment_track_id) FROM `Treatment_record` GROUP BY Treatment_record.treatment_track_id ORDER BY COUNT(Treatment_record.treatment_track_id) DESC LIMIT 10


if($connection) {
    $return_array = [];
    mysqli_query($connection,'USE dashboardDB');
    $result = mysqli_query($connection, "SELECT Treatment_record.treatment_track_id, Treatment_tracks.treatment_track_name , COUNT(Treatment_record.treatment_track_id) FROM `Treatment_record` JOIN Treatment_tracks on Treatment_tracks.treatment_track_id = Treatment_record.treatment_track_id GROUP BY Treatment_record.treatment_track_id ORDER BY COUNT(Treatment_record.treatment_track_id) DESC LIMIT 10");



    $count = 0;
    $max= -1 ;
    $most_popular = "None";
    $i = 1;
    if(mysqli_num_rows($result)>0) {
        while($row = mysqli_fetch_assoc($result))
        {
            $temp = ["".(int)$row["COUNT(Treatment_record.treatment_track_id)"], (int)$row["COUNT(Treatment_record.treatment_track_id)"] ] ;
            $count += (int)$row["COUNT(Treatment_record.treatment_track_id)"];
            array_push($return_array, $temp);
            $i++;

            if((int)$row["COUNT(Treatment_record.treatment_track_id)"]>max) {
                $max = (int)$row["COUNT(Treatment_record.treatment_track_id)"];
                $most_popular = $row["treatment_track_name"];
            }
        }
    }


    $data["array"]= json_encode($return_array);
    $data["total"] = $count;
    $data["average"] = (int)( $data["total"]/($i-1) );
    $data["most_popular"] = $most_popular;
    echo json_encode($data);
}



?>
