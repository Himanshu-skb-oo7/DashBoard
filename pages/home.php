<?php
include 'login_check.php';
include 'connect_to_db.php';

if($connection) {
    mysqli_query($connection, "USE dashboardDB");
    $result = mysqli_query($connection, "SELECT * FROM Menu ORDER BY id");
    $menu_items = array();
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_assoc($result)) {
            array_push($menu_items,$row['menu_items']);
        }
    }
} else {
    echo 'Connection Error';
}
?>

<html>
    <head>
        <title>HOME</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/home.css">
    </head>

    <body>
        <div id="menubar">
            <?php
            for($i = 0; $i < count($menu_items); $i++)
            {
                echo "<div class='menu-items'>$menu_items[$i]</div>";
            }
            ?>
        </div>

        <script
                src="https://code.jquery.com/jquery-3.4.1.min.js"
                integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
                crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <script src="../js/home.js"></script>

    </body>


</html>

