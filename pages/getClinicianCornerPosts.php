<?php
include 'connect_to_db.php';

if($connection) {
    $return_array = [];
    mysqli_query($connection, 'USE dashboardDB');
    $result = mysqli_query($connection, "SELECT Users.first_name, Users.last_name, COUNT(Article_Views.user_id) FROM Users JOIN Article_Views ON Article_Views.user_id = Users.user_id GROUP by `email` ORDER BY COUNT(Article_Views.user_id) DESC LIMIT 10");

    $titles = array();
    $count = array();
    if (mysqli_num_rows($result) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            $temp = ["".$i, (int)$row["COUNT(Article_Views.user_id)"]];
            array_push($return_array, $temp);
            array_push($titles,$row["first_name"]." ".$row["last_name"]);
            array_push($count, (int)$row["COUNT(Article_Views.user_id)"]);
            $i++;
        }
    }

    $data["array"] = json_encode($return_array);

    $result = mysqli_query($connection, "SELECT COUNT(*) FROM Articles");
    $data["total_articles"] = mysqli_fetch_assoc($result)["COUNT(*)"];

    $result = mysqli_query($connection, "SELECT COUNT(*) FROM Article_Views");
    $data["total_article_views"] = mysqli_fetch_assoc($result)["COUNT(*)"];

    $result = mysqli_query($connection, "SELECT COUNT(*) FROM Article_Shares");
    $data["total_articles_shares"] = mysqli_fetch_assoc($result)["COUNT(*)"];

    $result = mysqli_query($connection, "SELECT COUNT(*) FROM Users");
    $total_users = mysqli_fetch_assoc($result)["COUNT(*)"];

    $data["posts_per_clinician"] = (int)($data["total_articles"]/$total_users);

    $data["titles"] = $titles;
    $data["count"] = $count;

    echo json_encode($data);
}
?>