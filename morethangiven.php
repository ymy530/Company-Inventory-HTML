<?php
	include 'connectdb.php';
   $checkquantity= $_POST["quantitycheck"];//fetch the value that user selected
   $query = 'SELECT customers.lastname as lastname, customers.firstname as firstname,purchasequantity, description FROM customers, products, purchased WHERE
        customers.customerid = purchased.customerid AND products.productid = purchased.productid AND purchasequantity> "' .$checkquantity. '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';//return the prouct list that purchased
        echo $row["firstname"];
  		echo $row["lastname"];
  		echo $row["purchasequantity"];
  		echo  $checkquantity;
     }
     mysqli_free_result($result);
?>

