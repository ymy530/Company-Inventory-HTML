<?php
   include 'connectdb.php';
   $customerFirstname = $_POST["customerfirstname"];
   $customerLastname = $_POST["customerlastname"];
   $customerCity = $_POST["customercity"];
   $customerPhone = $_POST["customerphone"];
   $customerAgent = $_POST["customeragent"]
   $query1= 'SELECT MAX(customerid) AS cusid FROM customers';
   $result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database max query failed.");
   }
   $row=mysqli_fetch_assoc($result);
   $newkey = intval($row["cusid"]) + 1;
   $cusid = (string)$newkey;
$query= 'INSERT INTO customers VALUES ("' .$cusid.'","' .$customerFirstname. '","' .$customerLastname. '","' .$customerCity. '","' .$customerPhone. '","' .$customerAgent. '")';
if (!mysqli_query($connection,$query)) {
die ("Error while trying to add new customer". mysqli_error($connection));
} else {
header('Location: a3.php'); //send back to museum page once it is done exit;
} 
?>