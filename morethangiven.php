<?php
	include 'connectdb.php';
   $whichQuantity= $_POST["quantitycheck"];//fetch the value that user selected
   $query = 'SELECT  *
FROM purchased INNER JOIN customers ON customers.customerid = purchased.customerid 
INNER JOIN products ON products.productid = purchased.productid WHERE purchasequantity="' .$whichQuantity. '"';
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

