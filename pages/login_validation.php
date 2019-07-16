
<?php
include 'login_check.php';
include 'connect_to_db.php';
if($connection) {
    if((!isset($_POST['email']) || !isset($_POST['password']))) {
        header('Location: http://localhost/dashboard/pages/home.php');
    }

    $email = $_POST['email'];
    $password = $_POST['password'];
        mysqli_query($connection, 'use dashboardDB');
        $result = mysqli_query($connection, "SELECT * from login_details where email = '$email'");
        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);
            if($password == $row['password']) {
                $_SESSION['active_user'] = $email;
                header('Location: http://localhost/dashboard/pages/home.php');
            } else {
                echo 'Wrong Password';
            }
        } else {
            echo 'User Not Registered';
        }

} else {
    echo 'Not Connected';
}


?>
