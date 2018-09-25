
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "my_laravel";
	// Create connection
	$con = mysqli_connect($servername, $username, $password,$dbname);
    $select = "SELECT * FROM product";
    $queryres = mysqli_query($con,$select);
    $num_fields = mysqli_num_fields ($queryres );

$headers = array();
for ($i = 0; $i < $num_fields; $i++) {
    $headers[] = mysqli_fetch_field($queryres);
}


$fp = fopen('php://output', 'w');
if ($fp && $queryres) {
   
    fputcsv($fp, $headers);
    echo '<pre>';
print_r(fputcsv($fp, $headers));
die();
    while ($row = $queryres->fetch_array(MYSQLI_NUM)) {
        fputcsv($fp, array_values($row));
    }
    die;
}
