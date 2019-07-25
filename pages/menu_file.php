<?php
include 'login_check.php';
include 'connect_to_db.php';

if($connection) {
    $menu_items = array();
    mysqli_query($connection, "USE dashboardDB");

    $result =mysqli_query($connection, "SELECT `first_name`, `last_name` FROM Users WHERE `email`='".$_SESSION["active_user"]."'");

    if(mysqli_num_rows($result)) {
        while($row = mysqli_fetch_assoc($result))
        {
            array_push($menu_items, $row["first_name"]." ".$row["last_name"]);
        }
    }


    $result = mysqli_query($connection, "SELECT * FROM Menu ORDER BY id");

    if(mysqli_num_rows($result)>0) {
        while($row = mysqli_fetch_assoc($result))
        {
            array_push($menu_items,$row['menu_items']);
        }
    }

    $result = mysqli_query($connection,"SELECT `first_name` and `last_name` FROM login_details WHERE `email` = ".$_SESSION['active_user'] );
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result))
        {
            array_push($row["first_name"]);
        }
    }


} else {
    echo 'Connection Error';
}
?>

<link rel="stylesheet" href="../css/menu.css">

<div id="menubar">
    <?php
    for($i = 0; $i < count($menu_items); $i++)
    {
        echo "<div class='menu-items' id='menu_id_$menu_items[$i]'>$menu_items[$i]</div>";
    }
    ?>
</div>

<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src = "../js/menu.js"></script>