
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="../css/signUpForm.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>


<div id="back_button">
    <button id="back_to_login" class="btn btn-primary">Back To Login</button>
</div>
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
            <div class="col-3"></div>
            <div id="first_name_error_div" class="error_div col-9"></div>
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
            <div class="col-3"></div>
            <div id="last_name_error_div" class="error_div col-9"></div>
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
                <input name="email" class="form-control" id="email" type="email">
            </div>
        </div>

        <div class="row">
            <div class="col-3"></div>
            <div class="col-9 error_div" id="email_error_div" class="error_div"></div>
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
            <div class="col-3"></div>
            <div id="password_error_div" class=" col-9 error_div"></div>
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
            <div class="col-3"></div>
            <div id="confirm_password_error_div" class="error_div col-9"></div>
        </div>

        <button class="btn col-12" id="signUpButton">SignUp</button>
        <div id="signUpStatus"></div>

    </form>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src = "../js/signUp.js"></script>
</body>

</html>