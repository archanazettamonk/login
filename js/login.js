$(document).ready(
function()
{
  $("#loginBtn").on("click",function(){
		login();
  });
});


/* Function to send the AJAX request to server and display result accordingly*/
function login(){

	var emailid = $("#emailid").val();
	var password = $("#password").val();
    var validateRes = validate(emailid, password);
    if(validateRes == true) {
        //send ajax request to server
        $.ajax(
            'validateLogin.php',
            {
                type: 'POST',
                data: {
                    emailid: emailid,
                    password: password
                },
                success: function (result) {
                    try {
                        if (result == 'success') {
                            window.location.href = 'home.php';
                        } else {
                            alert(result);
                        }
                    }
                    catch (err) {
                        alert(err);
                    }
                },
                error: function () {
                    alert('Error');
                }
            });
    }
}

/* Function to validate the email and password */
function validate(email, password)
{
    var isValidate = true;
    var filter =  /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

    if(email=="")
    {
        alert('Email is required');
        isValidate=false;

    }
    else if(!email.match(filter))
    {
        alert('Please provide valid email');
        isValidate=false;
    }
    else
    {
        isValidate=true;
    }

    if(password == '') {
        alert('Password is required');
        isValidate = false;
    }

    return isValidate;
}
