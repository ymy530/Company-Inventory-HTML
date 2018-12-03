<?php
	if (isset($_POST['quantitycheck'])) { 
      include "connectdb.php"; 
    }
   $checkquantity= $_POST["quantitycheck"];//fetch the value that user entered
   // return information about everything that select purchased
   $query = 'SELECT customers.lastname as lastname, customers.firstname as firstname,purchasequantity, description FROM customers, products, purchased WHERE
        customers.customerid = purchased.customerid AND products.productid = purchased.productid AND purchasequantity> ' .$checkquantity. '';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';//return the purchased list that customer name, product description and their purchase quantity
        echo $row["firstname"];
        echo " ";
  		echo $row["lastname"];
  		echo " ";
  		echo $row["description"];
  		echo " ";
  		echo $row["purchasequantity"];
  		echo $query;
  		echo '</li>';
  		
     }
     mysqli_free_result($result);
     
?>

