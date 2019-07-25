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
        alert("Please enter the first name");
    } else if(last_name == '') {
        alert("Please enter the last name");
    } else if (email == '') {
        alert("Please enter the email address ");
    } else if (password == '') {
        alert("Please enter the password");
    } else if(confirm_password == '') {
        alert("Please enter the password again ");
    } else  if (password != confirm_password) {
        alert("both password are not same !")
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
                console.log("");
                if(return_value== 'Successful'){
                    window.location.href = "htttp://localhost/dashboard/index.php";
                } else {
                    $('#signUpError').html(return_value);
                }
            });
    }




});
