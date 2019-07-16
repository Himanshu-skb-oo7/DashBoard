<?php
include 'connect_to_db.php';
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];

if($connection){
    if($first_name!='' && $last_name!='' && $email!='' && $password!='') {
        mysqli_query($connection, 'use dashboardDB');
        $result = mysqli_query($connection, "SELECT * from login_details where email='$email';");

        if (mysqli_num_rows($result) > 0) {
            echo 'User already registered.';
        } else {
            $sql = "INSERT INTO login_details (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";
            mysqli_query($connection, $sql);
            echo 'Signed Up Successfully';
        }
    } else {
        echo 'Enter Valid Credentials';
    }
} else{
    echo 'Connection Error!';
}
