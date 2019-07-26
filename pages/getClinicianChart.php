<?php
include 'connect_to_db.php';
if($connection) {

    $return_array = [];
    mysqli_query($connection, 'USE dashboardDB');
    $result = mysqli_query($connection, "select date_created, COUNT(date_created) from Messages where Messages.date_created BETWEEN '2019/07/14' AND '2019/07/20' GROUP BY date_created ORDER by date_created");

    $i = 0;
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $i++;
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

    $total = mysqli_query($connection, "SELECT COUNT(*) from Messages");
    $data["total"] = mysqli_fetch_assoc($total)["COUNT(*)"];

    $average = mysqli_query($connection, "select AVG(v.d) from ( select date_created, COUNT(date_created) as d from Messages GROUP BY date_created ORDER by date_created ) as v");
    $data["average"] = mysqli_fetch_assoc($average)["AVG(v.d)"];

    $Highest = mysqli_query($connection, "select MAX(v.d) from ( select date_created, COUNT(date_created) as d from Messages GROUP BY date_created ORDER by date_created ) as v");
    $data["Highest"] = mysqli_fetch_assoc($Highest)["MAX(v.d)"];

    $Lowest = mysqli_query($connection, "select MIN(v.d) from ( select date_created, COUNT(date_created) as d from Messages GROUP BY date_created ORDER by date_created ) as v");
    $data["Lowest"] = mysqli_fetch_assoc($Lowest)["MIN(v.d)"];




    echo json_encode($data);

  }
?>

