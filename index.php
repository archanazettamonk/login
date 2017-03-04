<?php

    /*
     * Including DBFunction
     * validating email and password from database

	include_once('DBFunction.php');

	$funObj = new DBFunction();

	if(isset($_POST['login'])){
		$emailId = $_POST['emailid'];
		$password = $_POST['password'];
		$user = $funObj->login($emailId, $password);

		if ($user != FALSE) {
			// Login Success
		   header("location:home.php");
		} else {
			// Login Failed
			echo "<script>alert('Invalid Emailid/Password')</script>";
		}
	}*/
?>


<!DOCTYPE html>
 <html lang="en" class="no-js">
 <head>
        <meta charset="UTF-8" />
        <title>Login Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Login Form" />
        <meta name="author" content="Archana" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
	</head>
    <body>
        <div class="container">
            <header>
                <h1>&nbsp;</h1>
            </header>
            <section>
                <div id="container_demo" >
                    <div id="wrapper">
                        <div id="login" class="animate form">
                           <form name="login" method="post" action="">
                                <h1>Log in</h1>
                                <p>
                                    <label for="emailid" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailid" name="emailid" required="required" type="email" placeholder="abc@abc.com"/>
                                </p>
                                <p>
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="password" />
                                </p>
                                <p class="login button">
                                    <input type="button" name="loginBtn" id="loginBtn" value="Login" />
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/login.js"></script>
    </body>
</html>
