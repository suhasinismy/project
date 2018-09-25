<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "my_laravel";
			// Create connection
			$conn = mysqli_connect($servername, $username, $password,$dbname);

if(isset($_POST['submit'])){
		if($_FILES['fileToUpload']['name']){
			$arrFileName = explode('.',$_FILES['fileToUpload']['name']);

				if($arrFileName[1] == 'csv'){
				$handle = fopen($_FILES['fileToUpload']['tmp_name'], "r");
				$i=1;
				while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
					 
				
				// Check connection
				if (!$conn) {
				    die("Connection failed: " . mysqli_connect_error());
				}

				$academic = trim(mysqli_real_escape_string($conn,$data[0]));
				//$academic = mysqli_real_escape_string($conn,$data[1]);
				$import="INSERT into category(cat_name) values('$academic')";
				/*print_r($import);
				die();*/
				mysqli_query($conn,$import);
				$i++;
			}
				fclose($handle);
				//print "Import done";
			  header('location:csv.html');
			}
		}
}