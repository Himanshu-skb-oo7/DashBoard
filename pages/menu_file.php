<link rel="stylesheet" href="../css/menu.css">
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
            $temp = array();
            array_push($temp,$row['menu_items']);
            array_push($temp,$row['menu_link']);
            array_push($menu_items,$temp);
        }
    }
} else {
    echo 'Connection Error';
}
?>



<div class="menubar">
    <?php

    $user_pic = mysqli_query($connection, "select Users.user_picture from Users where Users.email = '".$_SESSION['active_user']."'");

    while($row = mysqli_fetch_assoc($user_pic))
    {
        if($row['user_picture'] != null )
            echo "<img id='user_pic' src='data:image/png;base64,".base64_encode($row['user_picture'])."'/>";
        else
            echo "<img id='user_pic' src='../user_images/default_user_pic.png'/>";

    }



    for($i = 0; $i < count($menu_items); $i++)
    {
        if($i == 0) {
            echo "<a class='username menu-items'>".$menu_items[$i]."</a>";
        } else {
            if($menu_items[$i][1]!='' or $menu_items[$i][1] != null) {
                echo "<a class='menu-items' id='menu_id_".$menu_items[$i][0]."' href='".$menu_items[$i][1]."'>".$menu_items[$i][0]."</a>";
            } else {
                echo "<a class='menu-items' id='menu_id_$menu_items[$i]'>".$menu_items[$i][0]."</a>";
            }
        }


    }

    ?>
</div>

<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src = "../js/menu.js"></script>