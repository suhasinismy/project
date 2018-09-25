<?php

		class DbConn{
		    public $servername = "localhost";
			public $username = "root";
			public $password = "";
			public $dbname = "my_laravel";

			function dbconection(){
				// Create connection
				$conn = mysqli_connect($this->servername, $this->username,
				                       $this->password,$this->dbname);
				// Check connection
				if (!$conn) {
				    die("Connection failed: " . mysqli_connect_error());
				}
				//echo "Connected successfully";
				return $conn;
			}
		}

?>