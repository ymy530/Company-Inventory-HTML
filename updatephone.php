<?php
   include 'connectdb.php';
   // fetch the user selection and user input from main page, find the correspond customer from customers table
   $customerName = $_POST["customername"];
   $customerPhone = $_POST["newphone"];
   //update the phone number
$query=  $query = 'UPDATE customers SET phone = "' .$customerPhone. '" WHERE customerid = "' .$customerName. '"';
if (!mysqli_query($connection,$query)) {
die ("Error while trying to update phone number ". mysqli_error($connection));
} else {
header('Location: a3.php'); //send back to museum page once it is done exit;
} 
?>