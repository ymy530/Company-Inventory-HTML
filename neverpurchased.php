<?php
   //$whichCustomer= $_POST["customer"];//fetch the value that user selected
   //return the product purchased correspond to value
   $query = 'SELECT  *
FROM    purchased INNER JOIN  customers ON customers.customerid = purchased.customerid 
INNER JOIN products ON products.productid = purchased.productid AND customers.customerid="' . $whichCustomer . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';//return the prouct list that purchased
        echo $row["description"];
     }
     mysqli_free_result($result);
?>