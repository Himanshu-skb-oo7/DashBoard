<?php
include 'login_check.php';
?>

<html>
<head>
    <title></title>
    <link rel="stylesheet" href="../css/signUpForm.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

<div id="wrapper" class="container">
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
            <div class="col-3">
                Role
            </div>
            <div class="col-9" id="confirm_password_div">
                <select id="role_id" class="form-control">
                    <option value="1">Role 1</option>
                    <option value="2">Role 2</option>
                    <option value="3">Role 3</option>
                </select>
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

        <div class="row">
            <div class="col-3">
                Confirm Password
            </div>
            <div class="col-9" id="confirm_password_div">
                <input type="password" name="password" class="form-control" id="confirm_password">
            </div>
        </div>


        <div class="row">
            <div class="col-3">
                Added By
            </div>
            <div class="col-9">
                <select id="added_by" class="form-control">
                    <option value="admin">ADMIN</option>
                </select>
            </div>
        </div>


        <button class="btn col-12" id="signUpButton">SignUp</button>
        <div id="signUpError"></div>


    </form>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src = "../js/signUp.js"></script>
</body>

</html>