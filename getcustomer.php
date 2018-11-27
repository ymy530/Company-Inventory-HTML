<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dr. Western's Vet Clinic-Your Pets</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are your pets:</h1>
<ol>
<?php
   $whichCustomer= $_POST["customer"];
   $query = 'SELECT  description
FROM    purchased INNER JOIN  customers ON customers.customerid = purchased.customerid 
INNER JOIN products ON products.productid = purchased.productid AND customers.customerid="' . $whichCustomer . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["description"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>