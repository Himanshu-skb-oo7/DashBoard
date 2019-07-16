<?php
session_start();
if($_SESSION['active_user']!='') {
    header("Location: http://localhost/dashboard/pages/home.php");
}
?>
<html>
    <head>
        <title>Login | Company</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
    <link rel="stylesheet" href="css/index.css">
    <div id="wrapper" class="container">
    <form id="login_form">

        <div class="row">
            <div class="col-2">
                Email
            </div>
            <div class="col-3">
                <input type="email" name="email" id="logInMail">
            </div>

            <div class="col-2">
                Password
            </div>
            <div class="col-3">
                <input type="password" name="password" id="logInPassword">
            </div>

            <Button id="logInButton" class="col-2"> LogIN </Button>
        </div>
        <div id="loginError"></div>

    </form>


        <form id="signUpForm">
        <div class="row">
            <div class="col-6">
                First Name
            </div>
            <div class="col-6" id="first_name_div">
                <input type="text" name="first_name" id="first_name">
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                Last Name
            </div>
            <div class="col-6" id="last_name_div">
                <input type="text" name="last_name" id="last_name">
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                Email
            </div>
            <div class="col-6" id="email_div">
                <input type="email" name="email" id="email">
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                Password
            </div>
            <div class="col-6" id="password_div">
                <input type="password" name="password" id="password">
            </div>
        </div>
        <button class="btn" id="signUpButton">SignUp</button>
        <div id="signUpError"></div>

        </form>
    </div>


    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="js/index.js"></script>
    </body>


</html>
