$('#signUpForm').on('submit', function (e) {
    e.preventDefault();

    $($('#first_name')).removeClass('border-red');
    $($('#last_name')).removeClass('border-red');
    $($('#email')).removeClass('border-red');
    $($('#password')).removeClass('border-red');
    $($('#confirm_password')).removeClass('border-red');

    var first_name = ($('#first_name').val()).trim();
    var last_name = ($('#last_name').val()).trim();
    var email = ($('#email').val()).trim();
    var password = ($('#password').val()).trim();
    var confirm_password = ($('#confirm_password').val()).trim()
    var role_id = ($('#role_id').val()).trim();
    var added_by = 1;

    var flag = 0;

    if(first_name == ''){
        flag=1;
        $($('#first_name')).addClass('border-red');
        $($("#first_name_error_div")).html('Please Enter the First Name');
    } else {
        $($("#first_name_error_div")).html('');
    }


    if(last_name == '') {
        flag=1;
        $($('#last_name')).addClass('border-red');
        $($("#last_name_error_div")).html('Please Enter the Last Name');
    } else {
        $($("#last_name_error_div")).html('');
    }

    if(email == '') {
        flag=1;
        $($('#email')).addClass('border-red');
        $($("#email_error_div")).html('Please Enter the Email');
    } else {
        $($("#email_error_div")).html('');
    }


    if(password == '') {
        flag=1;
        $($('#password')).addClass('border-red');
        $($("#password_error_div")).html('Please Enter the Password');
    } else {
        $($("#password_error_div")).html('');
    }

    if(confirm_password == '') {
        flag=1;
        $($('#confirm_password')).addClass('border-red');
        $($("#confirm_password_error_div")).html('Please Enter the Password Again');
    } else {
        $($("#confirm_password_error_div")).html('');
    }

    if(password != confirm_password) {
        flag=1;
        $($('#confirm_password')).addClass('border-red');
        $($("#confirm_password_error_div")).html('Both Passwords are not same !');
    }

    if(flag == 0) {
        $.post(
            "signup.php",
            {
                first_name: first_name,
                last_name: last_name,
                email: email,
                password: password,
                role_id: role_id,
                added_by: added_by
            },
            function(return_value)
            {
                if(return_value== 'Signed Up Successfully !'){
                    $($('#signUpStatus')).removeClass('error');
                    $($('#signUpStatus')).addClass('success');
                    $('#signUpStatus').html(return_value);
                    setTimeout(function () {
                        window.location.href = "http://localhost/dashboard/";
                    },2000);


                } else {
                    $($('#signUpStatus')).removeClass('success');
                    $($('#signUpStatus')).addClass('error');
                    $('#signUpStatus').html(return_value);
                }
            });
    }
});

$("#back_to_login").click(function () {
    window.location.href = "http://localhost/dashboard/";
});
