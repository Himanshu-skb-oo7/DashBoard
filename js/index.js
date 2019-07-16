


$('#signUpForm').on('submit', function (e) {
    e.preventDefault();
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var email = $('#email').val();
    var password = $('#password').val();

    $.post(
        "pages/signup.php",
        {
            first_name: first_name,
            last_name: last_name,
            email: email,
            password: password
        },
        function(return_value)
        {
            if(return_value== 'Successful'){
                window.location.href = "htttp://localhost/dashboard/index.php";
            } else {
                $('#signUpError').html(return_value);
            }
        });
});

$('#login_form').on('submit', function (e) {
    e.preventDefault();
    var logInMail = $('#logInMail').val();
    var logInPassword = $('#logInPassword').val();
    $.post(
        "pages/login_validation.php",
        {   email: logInMail,
            password: logInPassword
        },
        function(return_value)
        {
            if(return_value.length>4 || return_value.length==2)
            {
                window.location.href="http://localhost/dashboard/index.php";
            } else {
                    $('#loginError').html(return_value);

            }



        });
});