<link rel="stylesheet" href="../css/menu.css">
<?php
include 'login_check.php';
include 'connect_to_db.php';
session_start();


if($connection) {
    $menu_items = array();
    mysqli_query($connection, "USE dashboardDB");


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

    $result = mysqli_query($connection, "SELECT `first_name`, `last_name` FROM Users WHERE `email`='".$_SESSION["active_user"]."'");

    $username = array();
    if(mysqli_num_rows($result)) {
        while($row = mysqli_fetch_assoc($result))
        {
            array_push($username, $row["first_name"]." ".$row["last_name"]);
        }
    }



} else {
    echo 'Connection Error';
}

?>



<div class="menubar">
    <?php
    $user_pic = mysqli_query($connection, "select Users.user_picture from Users where Users.email = '".$_SESSION['active_user']."'");
    echo "<div class='profile'>";
    while($row = mysqli_fetch_assoc($user_pic))
    {
        echo "<div class='profile-pic'>";

        if($row['user_picture'] != null )
            echo "<img id='user_pic' src='data:image/png;base64,".base64_encode($row['user_picture'])."'/>";
        else
            echo "<img id='user_pic' src='../user_images/default_user_pic.png'/>";

        echo "</div>";
    }

    echo "<div id='username' class='username center'>$username[0]</div>";

    $skillSet_result = mysqli_query($connection, "select * from UsersVsSkills JOIN Skills ON Skills.skill_id = UsersVsSkills.skill_id 
                                                JOIN Users ON Users.user_id = UsersVsSkills.user_id 
                                                where Users.email ='".$_SESSION["active_user"]."'");

    $skillSet = array() ;

    if(mysqli_num_rows($skillSet_result)) {
        while($roww = mysqli_fetch_assoc($skillSet_result))
        {
            array_push($skillSet,$roww["skill_name"]);
        }
    } else {
        array_push($skillSet, "No Skill Associated ");
    }

    $str="";
    for ($k = 0; $k < count($skillSet); $k++) {
        $str = $str . $skillSet[$k];

        if ($k != count($skillSet) - 1)
            $str = $str . " | ";
    }

    echo "<div id = 'skills' class='center'>".$str."</div>";


    echo "</div>";

    for($i = 0; $i < count($menu_items); $i++)
    {
            if($menu_items[$i][1]!='' or $menu_items[$i][1] != null) {
                echo "<a class='menu-items' id='menu_id_".$menu_items[$i][0]."' href='".$menu_items[$i][1]."'>".$menu_items[$i][0]."</a>";
            } else {
                echo "<a class='menu-items' id='menu_id_$menu_items[$i]'>".$menu_items[$i][0]."</a>";
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