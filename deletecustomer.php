<?php
   include 'connectdb.php';
   $customerName = $_POST["customerdelete"];
   //$customerPhone = $_POST["newphone"];
	$query = 'DELETE FROM customers WHERE customerid = "' .$customerName. '"';
if (!mysqli_query($connection,$query)) {
die ("Error while trying to delete customer ". mysqli_error($connection));
} else {
header('Location: a3.php'); //send back to museum page once it is done exit;
} 

?>