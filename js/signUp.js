$('#signUpForm').on('submit', function (e) {
    e.preventDefault();
    var first_name = ($('#first_name').val()).trim();
    var last_name = ($('#last_name').val()).trim();
    var email = ($('#email').val()).trim();
    var password = ($('#password').val()).trim();
    var confirm_password = ($('#confirm_password').val()).trim()
    var role_id = ($('#role_id').val()).trim();
    var added_by = 1;

    if(first_name == '') {
        $($('#signUpStatus')).removeClass('success');
        $($('#signUpStatus')).addClass('error');
        $('#signUpStatus').html("Please enter the first name");
    } else if(last_name == '') {
        $($('#signUpStatus')).removeClass('success');
        $($('#signUpStatus')).addClass('error');
        $($('#signUpStatus')).removeClass('success');
        $('#signUpStatus').html("Please enter the last name");
    } else if (email == '') {
        $($('#signUpStatus')).removeClass('success');
        $($('#signUpStatus')).addClass('error');
        $('#signUpStatus').html("Please enter the email address ");
    } else if (password == '') {
        $($('#signUpStatus')).removeClass('success');
        $($('#signUpStatus')).addClass('error');
        $('#signUpStatus').html("Please enter the password");
    } else if(confirm_password == '') {
        $($('#signUpStatus')).removeClass('success');
        $($('#signUpStatus')).addClass('error');
        $('#signUpStatus').html("Please enter the password again ");
    } else  if (password != confirm_password) {
        $($('#signUpStatus')).removeClass('success');
        $($('#signUpStatus')).addClass('error');
        $('#signUpStatus').html("both password are not same !")
    } else{
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
                    },3000);


                } else {
                    $($('#signUpStatus')).removeClass('success');
                    $($('#signUpStatus')).addClass('error');
                    $('#signUpStatus').html(return_value);
                }
            });
    }




});
