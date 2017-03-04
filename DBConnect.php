<?php

    /*
     * Class used to connect the database.
     *
     */
	class DBConnect {

        /*
         * Function connects with the database
         * @return - PDO object or Error String
         */
        function getPDOConn() {
			$ini_array = parse_ini_file("config.ini", true);
			try
			{
					$servername = $ini_array['db_details']['servername'];
					$dbname = $ini_array['db_details']['dbname'];
					$username = $ini_array['db_details']['username'];
					$password = $ini_array['db_details']['password'];

					$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

                    // set the PDO error mode to exception
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    return $conn;

			}
			catch(PDOException $e)
	        {
                error_log("Database connection error - ".$e->getMessage(), 0);
	    	    return "Error: " . $e->getMessage();
	        }
		}
	}
