<?php
	include 'connectdb.php';
   $whichQuantity= $_POST["quantitycheck"];//fetch the value that user selected
   $query = 'SELECT customers.lastname as lastname, customers.firstname as firstname,purchasequantity, description FROM customers, products, purchase WHERE
        customers.customerid = purchase.customerid AND products.productid = purchase.productid AND purchasequantity> "' .$whichQuantity. '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';//return the prouct list that purchased
        echo $row["firstname"];
  		echo $row["lastname"];
  		echo $row["purchasequantity"];
  		echo  $whichQuantity;
     }
     mysqli_free_result($result);
?>

