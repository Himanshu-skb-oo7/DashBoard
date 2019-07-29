<?php
include 'connect_to_db.php';
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$role_id =  $_POST['role_id'];
$added_by = $_POST['added_by'];
session_start();
if($connection){
    if($first_name!='' && $last_name!='' && $email!='' && $password!='') {
        mysqli_query($connection, 'use dashboardDB');
        $result = mysqli_query($connection, "SELECT * from Users where email='$email';");

        if (mysqli_num_rows($result) > 0) {
            echo 'User already registered.';
        } else {
            $sql = "INSERT INTO Users (first_name, last_name, email, password ,role_id, 
                    date_added, status_bit, added_by) VALUES ('$first_name', '$last_name', 
                    '$email', '$password', $role_id, '".date('Y/m/d')."' ,1,$added_by)";
            mysqli_query($connection, $sql);
            $_SESSION['active_user'] = $email;
            echo "Signed Up Successfully !";
        }
    } else {
        echo 'Enter Valid Credentials';
    }
} else{
    echo 'Connection Error!';
}
