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
			echo '<meta charset="UTF-8"><meta name="description" content="Free Web tutorials">
			<meta name="keywords" content="HTML,CSS,XML,JavaScript">
			<meta name="author" content="John Doe">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">';

				// Check connection
				if (!$conn) {
				    die("Connection failed: " . mysqli_connect_error());
				}

                $catid= str_replace('?','',$data[0]);
                $proname= str_replace('?','',$data[1]);
                $proprice= str_replace('?','',$data[2]);
                $prooldprice= str_replace('?','',$data[3]);
                $prodesc= str_replace('?','',$data[4]);

				$cat_ids=  utf8_decode($catid);
				$pro_names=  utf8_decode($proname);
				$pro_prices=  utf8_decode($proprice);
				$pro_oldprices=  utf8_decode($prooldprice);
				$pro_descs=  utf8_decode($prodesc);

				$cat_id = nl2br(trim(mysqli_real_escape_string($conn,$cat_ids)));
				$pro_name = nl2br(trim(mysqli_real_escape_string($conn,$pro_names)));
				$pro_price = nl2br(trim(mysqli_real_escape_string($conn,$pro_prices)));
				$pro_oldprice = nl2br(trim(mysqli_real_escape_string($conn,$pro_oldprices)));
				$pro_desc = nl2br(trim(mysqli_real_escape_string($conn,$pro_descs)));
				//$academic = mysqli_real_escape_string($conn,$data[1]);
				$import="INSERT into product(cat_id,pro_name,pro_price,pro_oldprice,pro_desc) 
				         values('$cat_id','$pro_name','$pro_price','$pro_oldprice','$pro_desc')";
							mysqli_query($conn,$import);
				$i++;
			}
			//die();
				fclose($handle);
				//print "Import done";
			  header('location:pro.html');
			}
		}
}