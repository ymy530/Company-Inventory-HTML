<?php
   include 'connectdb.php';
   $whichProduct = $_POST["totalsales"];
   //$customerPhone = $_POST["newphone"];
	$query = 'DELETE FROM customers WHERE productid = "' .$whichProduct. '"';
if (!mysqli_query($connection,$query)) {
die ("Error while trying to delete customer ". mysqli_error($connection));
} else {
header('Location: a3.php'); //send back to museum page once it is done exit;
} 
?>