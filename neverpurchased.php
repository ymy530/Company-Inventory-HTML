<?php
   //$whichCustomer= $_POST["customer"];//fetch the value that user selected
   //return the product purchased correspond to value
   $query = 'SELECT description FROM products WHERE productid NOT IN (SELECT productid FROM purchased)';
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