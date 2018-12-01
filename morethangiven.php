<?php
	include 'connectdb.php';
   //$whichCustomer= $_POST["overpurchased"];//fetch the value that user selected
   $whichQuantity= $_POST["quantitycheck"];//fetch the value that user selected
   //return the product purchased correspond to value
   $query = 'SELECT  *
FROM customers, products, purchased WHERE
        customers.customerid = purchased.customerid AND products.productid = purchased.productid AND  purchasequantity > "' .$whichQuantity. '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';//return the prouct list that purchased
       echo $row["firstname"];
  		echo $row["lastname"];
  		echo $row["purchasequantity"];
     }
     mysqli_free_result($result);
?>

