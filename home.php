<?php

    /*
     * Include DBFunction file
     * logic of Logout functionality
     */
    include_once('DBFunction.php');

    if(isset($_POST['logout']) && !empty($_POST['logout'])){

        $funObj = new DBFunction();
        $logout = $funObj->logOut();

	}
	if(!($_SESSION)){
		header("Location:index.php");
	}
?>
<!DOCTYPE html>
 <html lang="en" class="no-js">
 <head>
        <meta charset="UTF-8" />
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Login success" />
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
                <div id="container_demo">
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                           <form name="login" method="post" action="">
                                <h1>Welcome </h1>
                                <p>
                                    <label for="uname" class="uname"> Your Name: </label>
                                   <?php echo $_SESSION['username'];?>
                                </p>
                                <p>
                                    <label for="email" class="youpasswd"> Your Email: </label>
                                    <?php echo $_SESSION['email'];?>
                                </p>

                                <p class="login button">
                                    <input type="submit" name="logout" value="Logout" />
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
