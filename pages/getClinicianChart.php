<?php
include 'connect_to_db.php';
if($connection) {

    $return_array = [];
    mysqli_query($connection, 'USE dashboardDB');
    $result = mysqli_query($connection, "select date_created, COUNT(date_created) from Messages where Messages.date_created BETWEEN '2019/07/14' AND '2019/07/20' GROUP BY date_created ORDER by date_created");

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $temp = [$row["date_created"], (int)$row["COUNT(date_created)"]];
            array_push($return_array, $temp);
        }
    }



    $data["array"] = json_encode($return_array);


    $result = mysqli_query($connection, "SELECT COUNT(*) FROM Messages");
    $data["message_volume"] = mysqli_fetch_assoc($result)["COUNT(*)"];

    $result = mysqli_query($connection, "SELECT COUNT(*) FROM Alerts");
    $data["alert_volume"] = mysqli_fetch_assoc($result)["COUNT(*)"];

    $result = mysqli_query($connection, "SELECT COUNT(*) FROM Alert_Type");
    $data["alert_by_type"] = mysqli_fetch_assoc($result)["COUNT(*)"];

    $result = mysqli_query($connection, "SELECT COUNT(*) FROM Messages WHERE Messages.created_by_id IS NOT NULL");
    $data["messages_by_clinician"] = mysqli_fetch_assoc($result)["COUNT(*)"];

    echo json_encode($data);

  }
?>

