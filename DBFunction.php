<?php

    /*
     * Class for database operation
     *
     */

    //Start a session to save user related data if login success
	  session_start();

    require_once('DBConnect.php');

    class DBFunction {

    //Private variable for connecting database
		private $pdo;

		function __construct() {
			// connecting to database
			$conn = new DBConnect();
			$this->pdo = $conn->getPDOConn();

			if(gettype($this->pdo) == 'string'){
				if (strpos($this->pdo, 'Error') !== false) {
				    //print_r($this->pdo);
						echo 'error connection';die;
				}
			}
		}

		/*
		 * Function to check the login
		 * @Param : email id
		 * @Param : password
		 *
		 * @return : result true if record found else False
		 */
		public function login($emailId, $password) {

			$sql = "SELECT * FROM users WHERE email = :emailid AND password = :password";
			$stmt = $this->pdo->prepare($sql);
			$stmt->bindParam(':emailid', $emailId);
			$stmt->bindParam(':password', md5($password));
			$stmt->execute();
			$row = $stmt->fetchObject();

			if(is_object($row)){
				$no_rows = count($row);
			} else {
				$no_rows = 0;
			}

			if ($no_rows == 1)
			{
                //saving the user info in session
				$_SESSION['login'] = true;
				$_SESSION['uid'] = $row->id;
				$_SESSION['username'] = ucwords($row->username);
				$_SESSION['email'] = $row->email;
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}

        /*
         * Function to logout
         * Destroy and remove all session related data
         * @return - true
         */
		public function logOut() {
            // remove all session variables
            session_unset();

            // destroy the session
            session_destroy();

            return TRUE;
        }
	}
