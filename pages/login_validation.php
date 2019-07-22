
<?php
include 'connect_to_db.php';
session_start();
if($_SESSION['active_user']!='') {
    header("Location: http://localhost/dashboard/index.php");
}

if($connection) {
    if((!isset($_POST['email']) || !isset($_POST['password']))) {
        header("Location: http://localhost/dashboard/index.php");
    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];
        mysqli_query($connection, 'use dashboardDB');
        $result = mysqli_query($connection, "SELECT * from Users where email = '$email'");

        if(mysqli_num_rows($result)>0){


            $row = mysqli_fetch_assoc($result);
            if($password == $row['password']) {
                $_SESSION['active_user'] = $email;
                echo "1";
            } else {
                echo "22";
            }
        } else {
            echo "333";
        }
    }


} else {
    echo "4444";
}


?>
