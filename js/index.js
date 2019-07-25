

$('#login_form').on('submit', function (e) {
    e.preventDefault();
    var logInMail = ($('#logInMail').val()).trim();
    var logInPassword = ($('#logInPassword').val()).trim();

    if(logInMail== '')
        alert("Please Enter Email Address !");
    else if (logInPassword == '') {
        alert("Please enter the password !");
    } else {
        $.post(
            "pages/login_validation.php",
            {   email: logInMail,
                password: logInPassword
            },
            function(return_value)
            {
                //console.log(return_value);
                if(return_value.length>4 || return_value.length==2)
                {
                    window.location.href="http://localhost/dashboard/index.php";
                } else  if(return_value.length==3) {
                    $('#loginError').html("Wrong Password");
                } else {
                    $('#loginError').html("User is not registered !");
                }
            });
    }





});