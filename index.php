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

    <form action="pages/signUpForm.php">
        <button class="btn col-12" id="signUpButton">SignUp</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="js/index.js"></script>
</body>


</html>
