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
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
    <div id="wrapper" class="container">
    <form id="login_form">
        <legend id="loginLegend">Log In Form</legend>
        <div class="row">
            <div class="col-9">
                <div class="row">
                     <div class="col-4">
                        Email
                    </div>
                    <div class="col-8">
                        <input type="email" class="form-control" name="email" id="logInMail">
                    </div>
                </div>

                <div class="row">
                     <div class="col-4">
                        Password
                    </div>
                    <div class="col-8">
                        <input type="password" class="form-control" name="password" id="logInPassword">
                    </div>
                </div>
            </div>

            <div class="col-3">
                <Button id="logInButton" class="btn btn-success"> Log IN </Button>
            </div>
        </div>
        <div id="loginError"></div>

    </form>


        <form id="signUpForm">
            <legend id="signUpLegend">Sign Up Form</legend>
        <div class="row">
            <div class="col-3">
                First Name
            </div>
            <div class="col-9" id="first_name_div">
                <input type="text" name="first_name"  class="form-control" id="first_name">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Last Name
            </div>
            <div class="col-9" id="last_name_div">
                <input type="text" name="last_name" class="form-control"  id="last_name">
            </div>
        </div>

        <div class="row">
            <div class="col-3" class="div">
                Email
            </div>
            <div class="col-9" id="email_div">
                <input type="email" name="email" class="form-control" id="email">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Password
            </div>
            <div class="col-9" id="password_div">
                <input type="password" name="password" class="form-control" id="password">
            </div>
        </div>

            <button class="btn col-12" id="signUpButton">SignUp</button>
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
