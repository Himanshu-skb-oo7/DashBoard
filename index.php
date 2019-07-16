<?php
session_start();
if($_SESSION['active_user']!='') {
    header("Location: http://localhost/dashboard/pages/home.php");
}
?>
<html>
    <form id="login_form" method="post" action="pages/login_validation.php">
        <label for="email"> Email:
            <input type="email" name="email" class="text" placeholder=" Enter the UserName">
        </label>
        <br>
        <label for="password"> Password
            <input type="text" name="password" class="text" placeholder=" Enter the password">
        </label>
        <input type="submit" value="LOGIN">
    </form>

    <form id="signup_form" action="pages/signup.php" method="post">
        <label for = "first_name">First Name
            <input type="text" name="first_name">
        </label>

        <label for = "last_name">Last Name
            <input type="text" name="last_name">
        </label>

        <label for = "email">Email Address
            <input type="email" name="email">
        </label>

        <label for = "password">Password
            <input type = "password" name="password">
        </label>

        <input type="submit" value="submit">
    </form>

    <script src="js/index.js"></script>
</html>
